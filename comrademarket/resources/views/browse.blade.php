<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse Listings - Comrade Marketing Centre</title>
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f0f2f5;
            color: #333;
            line-height: 1.6;
        }

        /* Navigation */
        .navbar {
            background-color: #0072CE;
            color: white;
            padding: 15px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .navbar-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            color: white;
            text-decoration: none;
            font-size: 22px;
            font-weight: bold;
        }

        .navbar-brand i {
            margin-right: 10px;
            font-size: 24px;
        }

        .navbar-nav {
            display: flex;
            list-style: none;
        }

        .nav-item {
            margin: 0 10px;
        }

        .nav-link {
            color: white;
            text-decoration: none;
            padding: 5px 10px;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 4px;
        }

        .auth-buttons {
            display: flex;
        }

        .auth-button {
            margin-left: 10px;
            padding: 8px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .login-button {
            background-color: #0072CE;
            color: white;
            border: 1px solid white;
        }

        .register-button {
            background-color: white;
            color: #0072CE;
        }

        /* Page Header */
        .page-header {
            margin: 30px 0;
            text-align: center;
        }

        .page-title {
            font-size: 36px;
            margin-bottom: 10px;
            color: #333;
        }

        /* Search and Filter Section */
        .search-section {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .search-form {
            display: flex;
            margin-bottom: 20px;
        }

        .search-input {
            flex-grow: 1;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 5px 0 0 5px;
            font-size: 16px;
        }

        .search-button {
            background-color: #0072CE;
            color: white;
            border: none;
            border-radius: 0 5px 5px 0;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
        }

        .filter-section {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            align-items: center;
        }

        .filter-label {
            font-weight: bold;
        }

        .filter-select {
            padding: 8px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: white;
        }

        .price-range {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .price-input {
            width: 100px;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        /* Listings Section */
        .categories-header {
            text-align: center;
            margin: 30px 0 20px;
            font-size: 28px;
            color: #333;
        }

        .listings-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }

        .listing-card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .listing-card:hover {
            transform: translateY(-5px);
        }

        .listing-image {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .listing-details {
            padding: 15px;
        }

        .listing-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 8px;
            color: #333;
        }

        .listing-price {
            font-size: 22px;
            font-weight: bold;
            color: #0072CE;
            margin-bottom: 8px;
        }

        .listing-location {
            color: #777;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .listing-date {
            color: #999;
            font-size: 12px;
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            margin: 40px 0;
        }

        .pagination-button {
            padding: 8px 15px;
            margin: 0 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: white;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .pagination-button:hover {
            background-color: #f0f2f5;
        }

        .pagination-button.active {
            background-color: #0072CE;
            color: white;
            border-color: #0072CE;
        }

        /* Footer */
        footer {
            background-color: #333;
            color: white;
            padding: 30px 0;
            margin-top: 50px;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .footer-column {
            flex: 1;
            min-width: 200px;
            margin-bottom: 20px;
        }

        .footer-title {
            font-size: 18px;
            margin-bottom: 15px;
            font-weight: bold;
        }

        .footer-links {
            list-style: none;
        }

        .footer-link {
            margin-bottom: 8px;
        }

        .footer-link a {
            color: #ddd;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-link a:hover {
            color: white;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            margin-top: 20px;
            border-top: 1px solid #444;
        }

        /* Loading and Feedback UI */
        .loading-indicator {
            text-align: center;
            padding: 20px;
            display: none;
        }

        .error-message {
            background-color: #ffebee;
            color: #c62828;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            display: none;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .listings-grid {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            }
            
            .filter-section {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .search-form {
                flex-direction: column;
            }
            
            .search-input {
                border-radius: 5px;
                margin-bottom: 10px;
            }
            
            .search-button {
                border-radius: 5px;
            }
            
            .auth-buttons {
                flex-direction: column;
            }
            
            .auth-button {
                margin-bottom: 10px;
            }
        }

        /* No Results Message */
        .no-results {
            text-align: center;
            padding: 40px 0;
            color: #777;
            font-size: 18px;
            display: none;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container navbar-content">
            <a href="index.html" class="navbar-brand">
                <i class="fas fa-store"></i>
                Comrade Marketing Centre
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="browse.html">Browse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                </li>
            </ul>
            <div class="auth-buttons">
                <a href="login.html" class="auth-button login-button">Login</a>
                <a href="register.html" class="auth-button register-button">Register</a>
                <div class="user-menu" style="display: none;">
                    <span class="username"></span>
                    <a href="profile.html" class="auth-button">Profile</a>
                    <button id="logout-button" class="auth-button">Logout</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <!-- Search and Filter Section -->
        <section class="search-section">
            <form class="search-form" id="search-form">
                <input type="text" placeholder="Search for items..." class="search-input" id="search-input">
                <button type="submit" class="search-button">
                    Search
                </button>
            </form>
            <div class="filter-section">
                <div>
                    <span class="filter-label">Category:</span>
                    <select class="filter-select" id="category-filter">
                        <option value="">All Categories</option>
                        <option value="books">Books</option>
                        <option value="electronics">Electronics</option>
                        <option value="furniture">Furniture</option>
                        <option value="clothing">Clothing</option>
                        <option value="services">Services</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div>
                    <span class="filter-label">Sort By:</span>
                    <select class="filter-select" id="sort-filter">
                        <option value="date_desc">Newest First</option>
                        <option value="date_asc">Oldest First</option>
                        <option value="price_asc">Price: Low to High</option>
                        <option value="price_desc">Price: High to Low</option>
                    </select>
                </div>
                <div class="price-range">
                    <span class="filter-label">Price Range:</span>
                    <input type="number" placeholder="Min" class="price-input" id="min-price">
                    <span>to</span>
                    <input type="number" placeholder="Max" class="price-input" id="max-price">
                </div>
                <button id="apply-filters" class="search-button">Apply Filters</button>
            </div>
        </section>

        <!-- Error Message Display -->
        <div class="error-message" id="error-message"></div>

        <!-- Loading Indicator -->
        <div class="loading-indicator" id="loading-indicator">Loading listings...</div>

        <!-- No Results Message -->
        <div class="no-results" id="no-results">No listings found matching your criteria.</div>

        <!-- Listings Display -->
        <h2 class="categories-header" id="listings-header">Browse Listings</h2>
        <div class="listings-grid" id="listings-container"></div>

        <!-- Pagination -->
        <div class="pagination" id="pagination"></div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container footer-content">
            <div class="footer-column">
                <h3 class="footer-title">Comrade Marketing Centre</h3>
                <p>The official marketplace for university students</p>
            </div>
            <div class="footer-column">
                <h3 class="footer-title">Quick Links</h3>
                <ul class="footer-links">
                    <li class="footer-link"><a href="index.html">Home</a></li>
                    <li class="footer-link"><a href="browse.html">Browse Items</a></li>
                    <li class="footer-link"><a href="sell.html">Sell Item</a></li>
                    <li class="footer-link"><a href="about.html">About Us</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3 class="footer-title">Account</h3>
                <ul class="footer-links">
                    <li class="footer-link"><a href="login.html">Login</a></li>
                    <li class="footer-link"><a href="register.html">Register</a></li>
                    <li class="footer-link"><a href="profile.html">My Profile</a></li>
                    <li class="footer-link"><a href="messages.html">Messages</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3 class="footer-title">Contact</h3>
                <ul class="footer-links">
                    <li class="footer-link">Email: support@comrademarketing.com</li>
                    <li class="footer-link">Phone: +123-456-7890</li>
                </ul>
            </div>
        </div>
        <div class="container footer-bottom">
            <p>&copy; 2025 Comrade Marketing Centre. All rights reserved.</p>
        </div>
    </footer>

    <!-- Font Awesome for Icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>

    <!-- JavaScript for Browse Listings Page -->
    <script>
        // Global variables
        const DIRECTUS_URL = 'http://localhost:8055'; // Replace with your Directus URL
        let currentPage = 1;
        const itemsPerPage = 12;
        let totalPages = 1;

        // DOM elements
        const listingsContainer = document.getElementById('listings-container');
        const paginationContainer = document.getElementById('pagination');
        const searchForm = document.getElementById('search-form');
        const searchInput = document.getElementById('search-input');
        const categoryFilter = document.getElementById('category-filter');
        const sortFilter = document.getElementById('sort-filter');
        const minPriceInput = document.getElementById('min-price');
        const maxPriceInput = document.getElementById('max-price');
        const applyFiltersButton = document.getElementById('apply-filters');
        const errorMessage = document.getElementById('error-message');
        const loadingIndicator = document.getElementById('loading-indicator');
        const noResultsMessage = document.getElementById('no-results');

        // Check user authentication status
        document.addEventListener('DOMContentLoaded', function() {
            checkAuthentication();
            fetchListings();
        });

        // Check authentication and update UI accordingly
        function checkAuthentication() {
            const token = localStorage.getItem('auth_token');
            const username = localStorage.getItem('username');
            
            const authButtons = document.querySelector('.auth-buttons');
            const loginButton = document.querySelector('.login-button');
            const registerButton = document.querySelector('.register-button');
            const userMenu = document.querySelector('.user-menu');
            const usernameDisplay = document.querySelector('.username');
            
            if (token && username) {
                // User is logged in
                loginButton.style.display = 'none';
                registerButton.style.display = 'none';
                userMenu.style.display = 'flex';
                usernameDisplay.textContent = username;
            } else {
                // User is not logged in
                loginButton.style.display = 'block';
                registerButton.style.display = 'block';
                userMenu.style.display = 'none';
            }
        }

        // Logout functionality
        const logoutButton = document.getElementById('logout-button');
        if (logoutButton) {
            logoutButton.addEventListener('click', function() {
                localStorage.removeItem('auth_token');
                localStorage.removeItem('user_id');
                localStorage.removeItem('username');
                window.location.href = 'index.html';
            });
        }

        // Fetch listings from Directus
        async function fetchListings() {
            showLoading(true);
            hideError();
            hideNoResults();
            
            try {
                // Build query parameters
                const searchQuery = searchInput.value;
                const category = categoryFilter.value;
                const sortBy = sortFilter.value;
                const minPrice = minPriceInput.value;
                const maxPrice = maxPriceInput.value;
                
                // Construct the API URL with filters
                let url = `${DIRECTUS_URL}/items/listings?limit=${itemsPerPage}&page=${currentPage}`;
                
                // Add filters
                const filters = [];
                
                if (searchQuery) {
                    filters.push(`filter[title][_contains]=${encodeURIComponent(searchQuery)}`);
                }
                
                if (category) {
                    filters.push(`filter[category][_eq]=${encodeURIComponent(category)}`);
                }
                
                if (minPrice) {
                    filters.push(`filter[price][_gte]=${encodeURIComponent(minPrice)}`);
                }
                
                if (maxPrice) {
                    filters.push(`filter[price][_lte]=${encodeURIComponent(maxPrice)}`);
                }
                
                // Add sorting
                let sort = '';
                switch (sortBy) {
                    case 'date_desc':
                        sort = 'sort=-date_created';
                        break;
                    case 'date_asc':
                        sort = 'sort=date_created';
                        break;
                    case 'price_asc':
                        sort = 'sort=price';
                        break;
                    case 'price_desc':
                        sort = 'sort=-price';
                        break;
                    default:
                        sort = 'sort=-date_created';
                }
                
                filters.push(sort);
                
                // Add all filters to URL
                if (filters.length > 0) {
                    url += '&' + filters.join('&');
                }
                
                // Make the API request
                const response = await fetch(url, {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json'
                    }
                });
                
                if (!response.ok) {
                    throw new Error('Failed to fetch listings');
                }
                
                const data = await response.json();
                
                // Update UI with listings
                displayListings(data.data);
                
                // Update pagination
                totalPages = Math.ceil(data.meta.total_count / itemsPerPage);
                updatePagination();
                
                // Show "no results" message if needed
                if (data.data.length === 0) {
                    showNoResults();
                }
                
            } catch (error) {
                console.error('Error fetching listings:', error);
                showError('Failed to load listings. Please try again later.');
            } finally {
                showLoading(false);
            }
        }

        // Display listings in the UI
        function displayListings(listings) {
            listingsContainer.innerHTML = '';
            
            listings.forEach(listing => {
                const listingCard = document.createElement('div');
                listingCard.className = 'listing-card';
                listingCard.onclick = () => {
                    window.location.href = `item.html?id=${listing.id}`;
                };
                
                // Format the price
                const formattedPrice = new Intl.NumberFormat('en-US', {
                    style: 'currency',
                    currency: 'USD'
                }).format(listing.price);
                
                // Format the date
                const dateCreated = new Date(listing.date_created);
                const formattedDate = dateCreated.toLocaleDateString('en-US', {
                    year: 'numeric',
                    month: 'short',
                    day: 'numeric'
                });
                
                // Use a placeholder image if none exists
                const imageUrl = listing.image_url ? 
                    `${DIRECTUS_URL}/assets/${listing.image_url}` : 
                    'https://via.placeholder.com/300x200?text=No+Image';
                
                listingCard.innerHTML = `
                    <img src="${imageUrl}" alt="${listing.title}" class="listing-image">
                    <div class="listing-details">
                        <h3 class="listing-title">${listing.title}</h3>
                        <p class="listing-price">${formattedPrice}</p>
                        <p class="listing-location">
                            <i class="fas fa-map-marker-alt"></i> 
                            ${listing.location || 'Not specified'}
                        </p>
                        <p class="listing-date">
                            <i class="far fa-calendar-alt"></i> 
                            Posted on ${formattedDate}
                        </p>
                    </div>
                `;
                
                listingsContainer.appendChild(listingCard);
            });
        }

        // Update pagination controls
        function updatePagination() {
            paginationContainer.innerHTML = '';
            
            // Previous button
            const prevButton = document.createElement('button');
            prevButton.className = 'pagination-button';
            prevButton.innerHTML = '&laquo; Previous';
            prevButton.disabled = currentPage === 1;
            prevButton.addEventListener('click', () => {
                if (currentPage > 1) {
                    currentPage--;
                    fetchListings();
                    window.scrollTo(0, 0);
                }
            });
            paginationContainer.appendChild(prevButton);
            
            // Page numbers
            const startPage = Math.max(1, currentPage - 2);
            const endPage = Math.min(totalPages, currentPage + 2);
            
            for (let i = startPage; i <= endPage; i++) {
                const pageButton = document.createElement('button');
                pageButton.className = `pagination-button ${i === currentPage ? 'active' : ''}`;
                pageButton.textContent = i;
                pageButton.addEventListener('click', () => {
                    currentPage = i;
                    fetchListings();
                    window.scrollTo(0, 0);
                });
                paginationContainer.appendChild(pageButton);
            }
            
            // Next button
            const nextButton = document.createElement('button');
            nextButton.className = 'pagination-button';
            nextButton.innerHTML = 'Next &raquo;';
            nextButton.disabled = currentPage === totalPages;
            nextButton.addEventListener('click', () => {
                if (currentPage < totalPages) {
                    currentPage++;
                    fetchListings();
                    window.scrollTo(0, 0);
                }
            });
            paginationContainer.appendChild(nextButton);
        }

        // Event listeners for search and filters
        searchForm.addEventListener('submit', function(e) {
            e.preventDefault();
            currentPage = 1;
            fetchListings();
        });

        applyFiltersButton.addEventListener('click', function() {
            currentPage = 1;
            fetchListings();
        });

        // UI helper functions
        function showLoading(show) {
            loadingIndicator.style.display = show ? 'block' : 'none';
        }

        function showError(message) {
            errorMessage.textContent = message;
            errorMessage.style.display = 'block';
        }

        function hideError() {
            errorMessage.style.display = 'none';
        }

        function showNoResults() {
            noResultsMessage.style.display = 'block';
        }

        function hideNoResults() {
            noResultsMessage.style.display = 'none';
        }
    </script>
</body>
</html>