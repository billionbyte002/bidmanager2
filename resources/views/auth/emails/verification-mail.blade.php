<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Your Email</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="http://127.0.0.1:8000/assets/img/cropped-Bidmanager-32x32.png" sizes="32x32" />
    <link rel="icon" href="http://127.0.0.1:8000/assets/img/cropped-Bidmanager-192x192 (1).png" sizes="192x192" />
    <link rel="apple-touch-icon" href="http://127.0.0.1:8000/assets/img/cropped-Bidmanager-180x180.png" />
    <meta name="msapplication-TileImage" content="http://127.0.0.1:8000/assets/imgcropped-Bidmanager-270x270.png" />
    <style id="kirki-inline-styles"></style>
    <style>
        body {
            background-color: #121212; /* Match dark theme */
            color: #fff; /* White text for contrast */
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #1e1e1e; /* Dark gray for content background */
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            padding: 30px;
            text-align: center;
        }
        .btn {
            background-color: #4CAF50; /* Match green button theme */
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
        }
        .btn:hover {
            background-color: #45a049; /* Slightly lighter green */
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Verify Your Email</h1>
        <p>Dear <strong>{{ $full_name }}</strong>,</p>
        <p>Thank you for registering with us. To complete your registration, please verify your email by clicking the button below:</p>
        <a href="{{ $verification_link }}" class="btn">Verify Email</a>
        <p>This link will expire in 24 hours.</p>
        <div class="footer">
            <p>Best regards,<br>Team BidManager</p>
        </div>
    </div>
</body>
</html>
