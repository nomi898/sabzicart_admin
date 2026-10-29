#!/bin/bash
set -euo pipefail

LOG_DIR="/var/www/devops_bootcamp/sabzicart_admin/storage/logs"
CLEANUP_LOG="/var/log/laravel-log-cleanup.log"
MAX_SIZE_MB=500
RETENTION_DAYS=14

# Compress Laravel log files older than one day.
find "$LOG_DIR" -maxdepth 1 -type f \
    -name 'laravel-*.log' -mmin +1440 \
    -exec gzip -- {} \;

# Delete compressed Laravel logs older than 14 days.
find "$LOG_DIR" -maxdepth 1 -type f \
    -name 'laravel-*.log.gz' -mtime +"$RETENTION_DAYS" -delete

# Warn if the logs folder exceeds 500 MB.
SIZE_KB=$(du -sk "$LOG_DIR" | awk '{print $1}')
LIMIT_KB=$((MAX_SIZE_MB * 1024))

if (( SIZE_KB > LIMIT_KB )); then
    printf '%s WARNING: Laravel logs directory is %s MB, exceeding %s MB\n' \
        "$(date '+%F %T')" "$((SIZE_KB / 1024))" "$MAX_SIZE_MB" \
        >> "$CLEANUP_LOG"
fi
