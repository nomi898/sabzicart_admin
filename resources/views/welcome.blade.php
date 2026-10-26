<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SabziCart | Laravel Application</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f0fdf4;
            color: #1f2937;
        }

        header {
            background: #15803d;
            color: white;
            padding: 22px 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 28px;
        }

        header p {
            margin: 8px 0 0;
            color: #dcfce7;
        }

        main {
            max-width: 850px;
            margin: 60px auto;
            padding: 0 20px;
        }

        .card {
            background: white;
            padding: 40px 30px;
            border-radius: 14px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.06);
            text-align: center;
        }

        .icon {
            font-size: 48px;
            margin-bottom: 15px;
        }

        h2 {
            color: #166534;
            font-size: 30px;
            margin: 0 0 15px;
        }

        .description {
            color: #6b7280;
            line-height: 1.7;
            max-width: 600px;
            margin: 0 auto;
        }

        .status {
            display: inline-block;
            margin-top: 25px;
            padding: 10px 16px;
            background: #dcfce7;
            color: #166534;
            border-radius: 30px;
            font-size: 14px;
            font-weight: bold;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 18px;
            margin-top: 25px;
        }

        .feature {
            background: white;
            padding: 24px;
            border-radius: 12px;
            border: 1px solid #dcfce7;
        }

        .feature h3 {
            color: #166534;
            margin-top: 0;
        }

        .feature p {
            color: #6b7280;
            font-size: 14px;
            line-height: 1.6;
        }

        footer {
            text-align: center;
            padding: 25px;
            color: #6b7280;
            font-size: 13px;
        }
    </style>
</head>
<body>
    <header>
        <h1>🥬 SabziCart</h1>
    </header>

    <main>
        <section class="card">
            <div class="icon">🛒</div>
            <h2>Welcome to SabziCart</h2>
            <p class="description">
                Your grocery shopping platform is being built with Laravel.
                Our goal is to make shopping for fresh vegetables, fruits,
                and everyday essentials simple and convenient.
            </p>

            <div class="status">✓ Application is running</div>
        </section>

        <section class="features">
            <div class="feature">
                <h3>🥦 Fresh Produce</h3>
                <p>A place for fresh vegetables, fruits, and quality groceries.</p>
            </div>

            <div class="feature">
                <h3>📦 Easy Shopping</h3>
                <p>Designed to make browsing products and managing orders simple.</p>
            </div>

            <div class="feature">
                <h3>⚙️ Powered by Laravel</h3>
                <p>A web application built for reliability, performance, and growth.</p>
            </div>
        </section>
    </main>

    <footer>
        &copy; 2026 SabziCart. All rights reserved.
    </footer>
</body>
</html>
