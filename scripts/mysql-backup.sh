#!/bin/bash

set -euo pipefail

BACKUP_DIR="/var/backups/mysql"
DATABASE="sabzicart"
DB_HOST="13.50.225.224"
DB_USER="backup_user"

DATE=$(date +%F_%H-%M-%S)
BACKUP_FILE="$BACKUP_DIR/${DATABASE}-${DATE}.sql.gz"
TEMP_FILE="${BACKUP_FILE}.tmp"

mkdir -p "$BACKUP_DIR"

# Create a backup of the remote database
if mysqldump \
    --host="$DB_HOST" \
    --port=3306 \
    --user="$DB_USER" \
    --single-transaction \
    --no-tablespaces \
    "$DATABASE" | gzip > "$TEMP_FILE"; then
    mv "$TEMP_FILE" "$BACKUP_FILE"
else
    rm -f "$TEMP_FILE"
    echo "ERROR: Database backup failed at $(date)" >&2
    exit 1
fi

# Delete backups older than seven days
find "$BACKUP_DIR" -maxdepth 1 -type f \
    -name "${DATABASE}-*.sql.gz" -mmin +10080 -delete

echo "Backup completed: $BACKUP_FILE"
