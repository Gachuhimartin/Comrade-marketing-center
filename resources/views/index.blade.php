<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comrade Marketing Centre</title>
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
        
        .hero {
            text-align: center;
            padding: 60px 0;
        }
        
        .hero h1 {
            font-size: 42px;
            color: #333;
            margin-bottom: 20px;
        }
        
        .hero p {
            font-size: 18px;
            color: #555;
            margin-bottom: 30px;
        }
        
        .hero-buttons {
            margin-top: 30px;
        }
        
        .browse-btn, .sell-btn {
            display: inline-block;
            padding: 12px 25px;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            border-radius: 4px;
            margin: 0 10px;
        }
        
        .browse-btn {
            background-color: #0066cc;
            color: white;
        }
        
        .sell-btn {
            background-color: #28a745;
            color: white;
        }
        
        .search-container {
            max-width: 700px;
            margin: 0 auto;
            padding: 30px 0;
            display: flex;
        }
        
        .search-input {
            flex: 1;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px 0 0 4px;
            outline: none;
        }
        
        .search-btn {
            background-color: #0066cc;
            color: white;
            border: none;
            border-radius: 0 4px 4px 0;
            padding: 0 20px;
            font-size: 16px;
            cursor: pointer;
        }
        
        .categories {
            padding: 30px 0;
            text-align: center;
        }
        
        .categories h2 {
            font-size: 32px;
            color: #333;
            margin-bottom: 30px;
        }
        
        .category-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 0 20px;
        }
        
        .category-card {
            width: 280px;
            height: 200px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            color: #333;
            transition: transform 0.3s;
        }
        
        .category-card:hover {
            transform: translateY(-5px);
        }
        
        .category-icon {
            font-size: 48px;
            margin-bottom: 15px;
            color: #0066cc;
        }
        
        .category-name {
            font-size: 18px;
            font-weight: bold;
        }
        
        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
            font-size: 14px;
        }
        
        /* User Menu (hidden by default) */
        .user-menu {
            display: none;
            position: absolute;
            right: 20px;
            top: 60px;
            background-color: white;
            border-radius: 4px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
            z-index: 100;
        }
        
        .user-menu a {
            display: block;
            padding: 10px 20px;
            color: #333;
            text-decoration: none;
            border-bottom: 1px solid #eee;
        }
        
        .user-menu a:last-child {
            border-bottom: none;
        }
        
        .user-menu a:hover {
            background-color: #f5f5f5;
        }
        
        /* For logged in users */
        .user-profile {
            display: none;
            color: white;
            cursor: pointer;
        }
        
        .user-avatar {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background-color: #ddd;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin-right: 10px;
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
                <a href="{{ route('home')}}">Home</a>
                <a href="{{route('products.index')}}">Browse</a>
                <a href="{{ route('about')}}">About</a>
            </div>
        </div>
        <div class="auth-buttons" id="auth-section">
            <a href="{{ route('login')}}" class="login-btn">Login</a>
            <a href="{{ route('register')}}" class="register-btn">Register</a>
        </div>
        <div class="user-profile" id="user-profile">
            <div class="user-avatar">
                <i class="fas fa-user"></i>
            </div>
            <span id="username">User</span>
        </div>
        <div class="user-menu" id="user-menu">
            <a href="{{ route('dashboard')}}"><i class="fas fa-user-circle"></i> My Profile</a>
            <a href="messages.html"><i class="fas fa-envelope"></i> Messages</a>
            <a href="#" id="logout-btn"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
    </nav>

    <section class="hero">
        <h1>Comrade Marketing Centre</h1>
        <p>The official marketplace for university students</p>
        <div class="hero-buttons">
            <a href="{{route('products.index')}}" class="browse-btn">Browse Items</a>
            <a href="{{route('products.create')}}" class="sell-btn">Sell Item</a>
        </div>
    </section>

    <form action="{{route('products.index')}}" method="get">
        <div class="search-container">
            @csrf
            <input type="text" name="search" value="{{request('search')}}" class="search-input" placeholder="Search for items...">
            <button type="submit"  class="search-btn"><i class="fas fa-search"></i> Search</button>
        </div>
    </form>

    <section class="categories">
        <h2>Browse Categories</h2>
        <div class="category-grid">
            <a href="{{ route('products.index', ['category' => 'books']) }}" class="category-card">
                <div class="category-icon"><i class="fas fa-book"></i></div>
                <div class="category-name">Books</div>
            </a>
            <a href="{{ route('products.index', ['category' => 'electronics']) }}" class="category-card">
                <div class="category-icon"><i class="fas fa-laptop"></i></div>
                <div class="category-name">Electronics</div>
            </a>
            <a href="{{ route('products.index', ['category' => 'clothing']) }}" class="category-card">
                <div class="category-icon"><i class="fas fa-tshirt"></i></div>
                <div class="category-name">Clothing</div>
            </a>
            <a href="{{ route('products.index', ['category' => 'furniture']) }}" class="category-card">
                <div class="category-icon"><i class="fas fa-couch"></i></div>
                <div class="category-name">Furniture</div>
            </a>
            <a href="{{ route('products.index', ['category' => 'services']) }}" class="category-card">
                <div class="category-icon"><i class="fas fa-hands-helping"></i></div>
                <div class="category-name">Services</div>
            </a>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2025 Comrade Marketing Centre. All rights reserved.</p>
    </footer>
</body>
</html>