<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Comrade Marketing Centre</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Your existing CSS styles */
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
        
        .login-container {
            max-width: 400px;
            margin: 50px auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 30px;
        }
        
        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .login-header h1 {
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
        
        .login-btn-container {
            text-align: center;
        }
        
        .login-submit {
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
        
        .login-submit:hover {
            background-color: #0055b3;
        }
        
        .register-link {
            text-align: center;
            margin-top: 20px;
        }
        
        .register-link a {
            color: #0066cc;
            text-decoration: none;
        }
        
        .register-link a:hover {
            text-decoration: underline;
        }
        
        .error-message {
            background-color: #ffecec;
            color: #f44336;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 20px;
            display: none;
        }
        
        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
            font-size: 14px;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <nav class="top-nav">
        <div class="left-section" style="display: flex; align-items: center;">
            <div class="logo-container">
                <i class="fas fa-store logo-icon"></i>
                <span class="logo-text">Comrade Marketing Centre</span>
            </div>
            <div class="main-nav">
                <a href="index.html">Home</a>
                <a href="browse.html">Browse</a>
                <a href="about.html">About</a>
            </div>
        </div>
        <div class="auth-buttons">
            <a href="login.html" class="login-btn">Login</a>
            <a href="register.html" class="register-btn">Register</a>
        </div>
    </nav>

    <div class="login-container">
        <div class="login-header">
            <h1>Login to Your Account</h1>
        </div>
        
        <!-- General error message -->
        @if ($errors->has('login'))
            <div class="error-message">
                <p>{{ $errors->first('login') }}</p>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <div class="error-message">
                        <p>{{ $message }}</p>
                    </div>
                @enderror
            </div>
            
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                @error('password')
                    <div class="error-message">
                        <p>{{ $message }}</p>
                    </div>
                @enderror
            </div>
            
            <div class="login-btn-container">
                <button type="submit" class="login-submit">Login</button>
            </div>
        </form>
        
        <div class="register-link">
            <p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2025 Comrade Marketing Centre. All rights reserved.</p>
    </footer>
</body>
</html>
