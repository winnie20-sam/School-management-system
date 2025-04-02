<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our School System</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            text-align: center;
            padding: 50px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Welcome to Our School Management System</h1>
        <p>Your all-in-one platform for managing students, teachers, and parents.</p>
        
        @auth
            <a href="{{ url('/dashboard') }}" class="btn">Go to Dashboard</a>
        @else
            <a href="{{ url('/login') }}" class="btn">Login</a>
            <a href="{{ url('/register') }}" class="btn">Register</a>
        @endauth
    </div>

</body>
</html>
