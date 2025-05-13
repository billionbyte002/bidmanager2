<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Email</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="http://127.0.0.1:8000/assets/img/cropped-Bidmanager-32x32.png" sizes="32x32" />
    <link rel="icon" href="http://127.0.0.1:8000/assets/img/cropped-Bidmanager-192x192 (1).png" sizes="192x192" />
    <link rel="apple-touch-icon" href="http://127.0.0.1:8000/assets/img/cropped-Bidmanager-180x180.png" />
    <meta name="msapplication-TileImage" content="http://127.0.0.1:8000/assets/imgcropped-Bidmanager-270x270.png" />
    <style id="kirki-inline-styles"></style>
    <style>
        body {
            background-color: #121212; /* Dark theme background */
            color: #fff; /* White text for contrast */
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 100px auto;
            background-color: #1e1e1e; /* Slightly lighter dark background for the container */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            text-align: center;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        p {
            margin-bottom: 15px;
        }
        .success-message {
            color: #4CAF50; /* Green for success messages */
        }
        .error-message {
            color: #FF6F61; /* Red for error messages */
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
        <h1>Email Verification</h1>
        <p>We have sent you a verification link. Please check your email and click the link to verify your account.</p>
    
        @if (session('success'))
            <p class="success-message">{{ session('success') }}</p>
        @endif
    
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="error-message">{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    
        <!-- ✅ Login Button -->
        <a href="{{ route('auth.login') }}" class="btn btn-success mt-3">Go to Login</a>
    
        <div class="footer mt-4">
            <p>Having trouble? Contact <a href="#" style="color: #4CAF50; text-decoration: none;">support</a>.</p>
        </div>
    </div>
    
</body>
</html>