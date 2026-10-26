
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Laravel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            color: #333;
            text-align: center;
            padding: 80px 20px;
        }

        .container {
            background: white;
            max-width: 600px;
            margin: auto;
            padding: 40px;
            border-radius: 12px;
        }

        h1 {
            color: #ef4444;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Laravel!</h1>
        <p>Your Laravel application is running successfully.</p>
        <p>You're ready to start building something amazing.</p>
        <p>Laravel Version: {{ Illuminate\Foundation\Application::VERSION }}</p>
    </div>
</body>
</html>

