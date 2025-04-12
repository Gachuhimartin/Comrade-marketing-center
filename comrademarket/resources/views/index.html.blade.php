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
                <a href="index.html">Home</a>
                <a href="browse.html">Browse</a>
                <a href="about.html">About</a>
            </div>
        </div>
        <div class="auth-buttons" id="auth-section">
            <a href="login.html" class="login-btn">Login</a>
            <a href="register.html" class="register-btn">Register</a>
        </div>
        <div class="user-profile" id="user-profile">
            <div class="user-avatar">
                <i class="fas fa-user"></i>
            </div>
            <span id="username">User</span>
        </div>
        <div class="user-menu" id="user-menu">
            <a href="profile.html"><i class="fas fa-user-circle"></i> My Profile</a>
            <a href="messages.html"><i class="fas fa-envelope"></i> Messages</a>
            <a href="#" id="logout-btn"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
    </nav>

    <section class="hero">
        <h1>Comrade Marketing Centre</h1>
        <p>The official marketplace for university students</p>
        <div class="hero-buttons">
            <a href="browse.html" class="browse-btn">Browse Items</a>
            <a href="sell.html" class="sell-btn">Sell Item</a>
        </div>
    </section>

    <div class="search-container">
        <input type="text" class="search-input" placeholder="Search for items...">
        <button class="search-btn"><i class="fas fa-search"></i> Search</button>
    </div>

    <section class="categories">
        <h2>Browse Categories</h2>
        <div class="category-grid" id="category-grid">
            <!-- Categories will be loaded here -->
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2025 Comrade Marketing Centre. All rights reserved.</p>
    </footer>

    <script>
        // Check if user is logged in
        document.addEventListener('DOMContentLoaded', async function() {
            const token = localStorage.getItem('auth_token');
            const authSection = document.getElementById('auth-section');
            const userProfile = document.getElementById('user-profile');
            const userMenu = document.getElementById('user-menu');
            const logoutBtn = document.getElementById('logout-btn');
            const username = document.getElementById('username');
            
            // Function to fetch categories from Directus
            async function fetchCategories() {
                try {
                    const response = await fetch('http://localhost:8055/items/categories', {
                        headers: {
                            'Content-Type': 'application/json',
                        }
                    });
                    
                    if (!response.ok) {
                        throw new Error('Failed to fetch categories');
                    }
                    
                    const data = await response.json();
                    const categoryGrid = document.getElementById('category-grid');
                    
                    // Pre-defined icons for categories
                    const icons = {
                        'Books': 'fa-book',
                        'Electronics': 'fa-laptop',
                        'Clothing': 'fa-tshirt',
                        'Furniture': 'fa-couch',
                        'Services': 'fa-hands-helping',
                        'Other': 'fa-box'
                    };
                    
                    // If no categories exist, show default ones
                    const categories = data.data.length > 0 ? data.data : [
                        { name: 'Books' },
                        { name: 'Electronics' },
                        { name: 'Clothing' },
                        { name: 'Furniture' },
                        { name: 'Services' },
                        { name: 'Other' }
                    ];
                    
                    categoryGrid.innerHTML = '';
                    categories.forEach(category => {
                        const iconClass = icons[category.name] || 'fa-tag';
                        
                        const categoryCard = document.createElement('a');
                        categoryCard.className = 'category-card';
                        categoryCard.href = `browse.html?category=${encodeURIComponent(category.name)}`;
                        
                        categoryCard.innerHTML = `
                            <div class="category-icon">
                                <i class="fas ${iconClass}"></i>
                            </div>
                            <div class="category-name">${category.name}</div>
                        `;
                        
                        categoryGrid.appendChild(categoryCard);
                    });
                    
                } catch (error) {
                    console.error('Error fetching categories:', error);
                    // Show default categories in case of error
                    const categoryGrid = document.getElementById('category-grid');
                    const defaultCategories = [
                        { name: 'Books', icon: 'fa-book' },
                        { name: 'Electronics', icon: 'fa-laptop' },
                        { name: 'Clothing', icon: 'fa-tshirt' },
                        { name: 'Furniture', icon: 'fa-couch' },
                        { name: 'Services', icon: 'fa-hands-helping' },
                        { name: 'Other', icon: 'fa-box' }
                    ];
                    
                    categoryGrid.innerHTML = '';
                    defaultCategories.forEach(category => {
                        const categoryCard = document.createElement('a');
                        categoryCard.className = 'category-card';
                        categoryCard.href = `browse.html?category=${encodeURIComponent(category.name)}`;
                        
                        categoryCard.innerHTML = `
                            <div class="category-icon">
                                <i class="fas ${category.icon}"></i>
                            </div>
                            <div class="category-name">${category.name}</div>
                        `;
                        
                        categoryGrid.appendChild(categoryCard);
                    });
                }
            }
            
            // Call the function to load categories
            fetchCategories();
            
            if (token) {
                try {
                    // Fetch user info
                    const response = await fetch('http://localhost:8055/users/me', {
                        headers: {
                            'Authorization': `Bearer ${token}`
                        }
                    });
                    
                    if (response.ok) {
                        const userData = await response.json();
                        // Show user profile section
                        authSection.style.display = 'none';
                        userProfile.style.display = 'flex';
                        username.textContent = userData.first_name || userData.email;
                        
                        // Show user menu on click
                        userProfile.addEventListener('click', function() {
                            if (userMenu.style.display === 'block') {
                                userMenu.style.display = 'none';
                            } else {
                                userMenu.style.display = 'block';
                            }
                        });
                        
                        // Close menu when clicking outside
                        document.addEventListener('click', function(event) {
                            if (!userProfile.contains(event.target) && !userMenu.contains(event.target)) {
                                userMenu.style.display = 'none';
                            }
                        });
                        
                        // Logout functionality
                        logoutBtn.addEventListener('click', function(e) {
                            e.preventDefault();
                            localStorage.removeItem('auth_token');
                            window.location.href = 'index.html';
                        });
                    } else {
                        // Token invalid, remove it
                        localStorage.removeItem('auth_token');
                    }
                } catch (error) {
                    console.error('Error fetching user data:', error);
                    localStorage.removeItem('auth_token');
                }
            }
            
            // Add event listener to search button
            document.querySelector('.search-btn').addEventListener('click', function() {
                const searchQuery = document.querySelector('.search-input').value.trim();
                if (searchQuery) {
                    window.location.href = `browse.html?search=${encodeURIComponent(searchQuery)}`;
                }
            });
            
            // Also enable search on Enter key
            document.querySelector('.search-input').addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    const searchQuery = this.value.trim();
                    if (searchQuery) {
                        window.location.href = `browse.html?search=${encodeURIComponent(searchQuery)}`;
                    }
                }
            });
        });
    </script>
</body>
</html>