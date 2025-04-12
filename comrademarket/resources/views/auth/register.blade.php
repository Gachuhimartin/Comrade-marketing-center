<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Comrade Marketing Centre</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {     
            background-color: #f0f0f0;
        }

        .top-nav {
            background-color: #0066cc;
            color: white;
            padding: 15px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-container {
            display: flex;
            align-items: center;
            margin-left: 20px;
        }

        .logo-icon {
            font-size: 24px;
            margin-right: 10px;
        }

        .logo-text {
            font-size: 20px;
            font-weight: bold;
        }

        .main-nav {
            display: flex;
            margin-left: 30px;
        }

        .main-nav a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
            font-size: 16px;
        }

        .auth-buttons {
            margin-right: 20px;
        }

        .auth-buttons a {
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 4px;
            font-weight: bold;
        }

        .login-btn {
            background-color: #0066cc;
            color: white;
            border: 1px solid white;
            margin-right: 10px;
        }

        .register-btn {
            background-color: white;
            color: #0066cc;
        }

        .register-container {
            max-width: 500px;
            margin: 50px auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 30px;
        }

        .register-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .register-header h1 {
            font-size: 24px;
            color: #333;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        .input-row {
            display: flex;
            gap: 20px;
        }

        .input-row .input-group {
            flex: 1;
        }

        .register-btn-container {
            text-align: center;
        }

        .register-submit {
            background-color: #0066cc;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 4px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .register-submit:hover {
            background-color: #0055b3;
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
        }

        .login-link a {
            color: #0066cc;
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
            font-size: 14px;
            margin-top: 50px;
        }
        .error-message {
    background-color: #f8d7da;
    color: #721c24;
    padding: 15px;
    border-radius: 8px;
    margin-bottom: 20px;
    border: 1px solid #f5c6cb;
    font-size: 16px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.error-message ul {
    list-style-type: none;
    padding-left: 0;
}

.error-message li {
    margin-bottom: 8px;
}

.error-message li::before {
    content: "⚠️";
    margin-right: 8px;
    font-size: 18px;
}

    </style>
</head>
<body>
    <div class="register-container">
        <div class="register-header">
            <h1>Create an Account</h1>
        </div>

        <!-- Display error messages -->
        @if ($errors->any())
            <div class="error-message">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form id="register-form" action="{{ route('register') }}" method="POST">
            @csrf
            <div class="input-row">
                <div class="input-group">
                    <label for="user_name">User Name</label>
                    <input type="text" id="user_name" name="user_name" value="{{ old('user_name') }}" required>
                </div>
            </div>

            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="input-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>

            <div class="input-group">
                <label for="phone_number">Phone Number</label>
                <input type="text" name="phone_number" id="phone_number">
            </div>

            <div class="register-btn-container">
                <button type="submit" class="register-submit">Register</button>
            </div>
        </form>

        <div class="login-link">
            <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2025 Comrade Marketing Centre. All rights reserved.</p>
    </footer>
</body>
</html>
