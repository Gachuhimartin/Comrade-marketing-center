<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Details - Comrade Marketing Centre</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        
        body {
            background-color: #f0f2f5;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        /* Header Styles */
        header {
            background-color: #0066cc;
            color: white;
            padding: 10px 0;
        }
        
        .logo-container {
            display: flex;
            align-items: center;
            margin-left: 20px;
        }
        
        .logo-container i {
            font-size: 24px;
            margin-right: 10px;
        }
        
        .logo-text {
            font-size: 22px;
            font-weight: bold;
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }
        
        .nav-links {
            display: flex;
        }
        
        .nav-links a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 16px;
        }
        
        .auth-buttons {
            display: flex;
        }
        
        .auth-buttons a {
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 4px;
            margin-left: 10px;
            font-weight: bold;
        }
        
        .login-btn {
            background-color: transparent;
            border: 1px solid white;
            color: white;
        }
        
        .register-btn {
            background-color: white;
            color: #0066cc;
        }
        
        /* Item Details Styles */
        .item-container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            overflow: hidden;
        }
        
        .item-header {
            padding: 20px;
            border-bottom: 1px solid #eee;
        }
        
        .item-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        .item-meta {
            display: flex;
            justify-content: space-between;
            color: #666;
            font-size: 14px;
        }
        
        .item-price {
            font-size: 22px;
            font-weight: bold;
            color: #0066cc;
        }
        
        .item-content {
            display: flex;
            padding: 20px;
        }
        
        .item-images {
            flex: 0 0 50%;
            padding-right: 20px;
        }
        
        .main-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 10px;
        }
        
        .thumbnail-container {
            display: flex;
            gap: 10px;
        }
        
        .thumbnail {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 4px;
            cursor: pointer;
            opacity: 0.7;
            transition: opacity 0.3s;
        }
        
        .thumbnail:hover, .thumbnail.active {
            opacity: 1;
        }
        
        .item-details {
            flex: 0 0 50%;
        }
        
        .item-description {
            margin-bottom: 20px;
            line-height: 1.6;
        }
        
        .item-attributes {
            margin-bottom: 20px;
        }
        
        .attribute {
            display: flex;
            margin-bottom: 10px;
        }
        
        .attribute-label {
            font-weight: bold;
            width: 120px;
        }
        
        .seller-info {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        
        .seller-header {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        
        .seller-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 10px;
        }
        
        .seller-rating {
            color: #f1c40f;
            margin-left: auto;
        }
        
        .action-buttons {
            display: flex;
            gap: 10px;
        }
        
        .action-btn {
            padding: 12px 20px;
            border-radius: 4px;
            border: none;
            font-weight: bold;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50%;
        }
        
        .contact-btn {
            background-color: #0066cc;
            color: white;
        }
        
        .save-btn {
            background-color: #f0f2f5;
            color: #555;
        }
        
        .action-btn i {
            margin-right: 5px;
        }
        
        .item-footer {
            padding: 20px;
            border-top: 1px solid #eee;
        }
        
        .similar-items {
            margin-top: 30px;
        }
        
        .section-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 15px;
        }
        
        .items-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
        }
        
        .item-card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        
        .item-card:hover {
            transform: translateY(-5px);
        }
        
        .card-img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }
        
        .card-content {
            padding: 12px;
        }
        
        .card-title {
            font-weight: bold;
            margin-bottom: 5px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        .card-price {
            color: #0066cc;
            font-weight: bold;
        }
        
        .card-meta {
            display: flex;
            justify-content: space-between;
            color: #666;
            font-size: 12px;
            margin-top: 5px;
        }
        
        /* Footer Styles */
        footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            margin-top: 40px;
        }
        
        .footer-content {
            display: flex;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .footer-links {
            display: flex;
            gap: 20px;
        }
        
        .footer-links a {
            color: white;
            text-decoration: none;
        }
        
        .copyright {
            margin-top: 20px;
            text-align: center;
            font-size: 14px;
            color: #aaa;
        }
        
        /* Loader */
        .loader {
            display: none;
            text-align: center;
            padding: 30px;
        }
        
        .loader-spinner {
            border: 5px solid #f3f3f3;
            border-top: 5px solid #0066cc;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
            margin: 0 auto;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        /* Error message */
        .error-message {
            display: none;
            color: #e74c3c;
            background-color: #fde2e2;
            padding: 15px;
            border-radius: 4px;
            margin: 20px 0;
            text-align: center;
        }
        
        /* Success message */
        .success-message {
            display: none;
            color: #27ae60;
            background-color: #e6f9ee;
            padding: 15px;
            border-radius: 4px;
            margin: 20px 0;
            text-align: center;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .item-content {
                flex-direction: column;
            }
            
            .item-images, .item-details {
                flex: 0 0 100%;
                padding-right: 0;
            }
            
            .items-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .auth-buttons {
                display: none;
            }
            
            .mobile-menu {
                display: block;
            }
        }
        
        @media (max-width: 480px) {
            .items-grid {
                grid-template-columns: 1fr;
            }
            
            .action-buttons {
                flex-direction: column;
            }
            
            .action-btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo-container">
                <i class="fas fa-shopping-bag"></i>
                <span class="logo-text">Comrade Marketing Centre</span>
            </div>
            <div class="nav-links">
                <a href="index.html">Home</a>
                <a href="browse.html">Browse</a>
                <a href="about.html">About</a>
            </div>
            <div class="auth-buttons" id="auth-buttons">
                <a href="login.html" class="login-btn">Login</a>
                <a href="register.html" class="register-btn">Register</a>
            </div>
            <div class="user-menu" id="user-menu" style="display: none;">
                <a href="profile.html" id="profile-link">My Profile</a>
                <a href="messages.html">Messages</a>
                <a href="#" id="logout-btn">Logout</a>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="loader" id="loader">
            <div class="loader-spinner"></div>
            <p>Loading item details...</p>
        </div>
        
        <div class="error-message" id="error-message"></div>
        <div class="success-message" id="success-message"></div>
        
        <div class="item-container" id="item-container" style="display: none;">
            <div class="item-header">
                <h1 class="item-title" id="item-title">Loading...</h1>
                <div class="item-meta">
                    <span id="item-category">Category</span>
                    <span id="item-date">Posted on: </span>
                </div>
                <div class="item-price" id="item-price">$0.00</div>
            </div>
            
            <div class="item-content">
                <div class="item-images">
                    <img src="https://via.placeholder.com/600x400" alt="Item Image" class="main-image" id="main-image">
                    <div class="thumbnail-container" id="thumbnail-container">
                        <!-- Thumbnails will be added dynamically -->
                    </div>
                </div>
                
                <div class="item-details">
                    <div class="item-description" id="item-description">
                        Loading description...
                    </div>
                    
                    <div class="item-attributes" id="item-attributes">
                        <!-- Attributes will be added dynamically -->
                    </div>
                    
                    <div class="seller-info" id="seller-info">
                        <div class="seller-header">
                            <img src="https://via.placeholder.com/50" alt="Seller Avatar" class="seller-avatar" id="seller-avatar">
                            <div>
                                <h3 id="seller-name">Seller Name</h3>
                                <small id="seller-joined">Member since: </small>
                            </div>
                            <div class="seller-rating" id="seller-rating">
                                <i class="fas fa-star"></i>
                                <span id="rating-value">4.5</span>
                            </div>
                        </div>
                        
                        <div class="action-buttons">
                            <button class="action-btn contact-btn" id="contact-btn">
                                <i class="fas fa-comment"></i> Contact Seller
                            </button>
                            <button class="action-btn save-btn" id="save-btn">
                                <i class="far fa-bookmark"></i> Save Item
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="item-footer">
                <div class="item-report">
                    <a href="#" id="report-item"><i class="fas fa-flag"></i> Report this item</a>
                </div>
            </div>
        </div>
        
        <div class="similar-items" id="similar-items">
            <h2 class="section-title">Similar Items</h2>
            <div class="items-grid" id="similar-items-grid">
                <!-- Similar items will be added dynamically -->
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-content">
            <div class="footer-links">
                <a href="about.html">About Us</a>
                <a href="privacy.html">Privacy Policy</a>
                <a href="terms.html">Terms of Service</a>
                <a href="contact.html">Contact Us</a>
            </div>
        </div>
        <div class="copyright">
            &copy; 2025 Comrade Marketing Centre - The official marketplace for university students
        </div>
    </footer>

    <script>
        // Global variables
        const API_URL = 'http://localhost:8055'; // Replace with your Directus URL
        let currentUser = null;
        let itemData = null;

        // DOM Elements
        const loader = document.getElementById('loader');
        const errorMessage = document.getElementById('error-message');
        const successMessage = document.getElementById('success-message');
        const itemContainer = document.getElementById('item-container');
        const authButtons = document.getElementById('auth-buttons');
        const userMenu = document.getElementById('user-menu');
        const contactBtn = document.getElementById('contact-btn');
        const saveBtn = document.getElementById('save-btn');
        const reportItem = document.getElementById('report-item');
        const similarItemsGrid = document.getElementById('similar-items-grid');

        // Get item ID from URL
        const urlParams = new URLSearchParams(window.location.search);
        const itemId = urlParams.get('id');

        // Initialize page
        document.addEventListener('DOMContentLoaded', async () => {
            if (!itemId) {
                showError('Item not found. Please check the URL and try again.');
                return;
            }

            // Check if user is logged in
            checkAuthStatus();
            
            // Load item data
            await loadItemDetails(itemId);
            
            // Load similar items
            await loadSimilarItems();
            
            // Add event listeners
            setupEventListeners();
        });

        // Check authentication status
        async function checkAuthStatus() {
            const token = localStorage.getItem('authToken');
            if (!token) {
                // User is not logged in
                authButtons.style.display = 'flex';
                userMenu.style.display = 'none';
                return;
            }

            try {
                // Verify token and get user data
                const response = await fetch(`${API_URL}/users/me`, {
                    method: 'GET',
                    headers: {
                        'Authorization': `Bearer ${token}`,
                        'Content-Type': 'application/json'
                    }
                });

                if (response.ok) {
                    const userData = await response.json();
                    currentUser = userData;
                    
                    // Update UI for logged in user
                    authButtons.style.display = 'none';
                    userMenu.style.display = 'flex';
                    
                    // Set profile link
                    document.getElementById('profile-link').textContent = userData.first_name || 'My Profile';
                } else {
                    // Token is invalid
                    localStorage.removeItem('authToken');
                    authButtons.style.display = 'flex';
                    userMenu.style.display = 'none';
                }
            } catch (error) {
                console.error('Error checking auth status:', error);
                authButtons.style.display = 'flex';
                userMenu.style.display = 'none';
            }
        }

        // Load item details
        async function loadItemDetails(id) {
            loader.style.display = 'block';
            itemContainer.style.display = 'none';
            errorMessage.style.display = 'none';
            
            try {
                const response = await fetch(`${API_URL}/items/listings/${id}`, {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json'
                    }
                });

                if (!response.ok) {
                    throw new Error('Failed to load item details');
                }

                const data = await response.json();
                itemData = data.data;
                
                // Populate item details
                populateItemDetails(itemData);
                
                loader.style.display = 'none';
                itemContainer.style.display = 'block';
            } catch (error) {
                console.error('Error loading item details:', error);
                loader.style.display = 'none';
                showError('Failed to load item details. Please try again later.');
            }
        }

        // Populate item details in the UI
        function populateItemDetails(item) {
            // Set title and basic info
            document.getElementById('item-title').textContent = item.title;
            document.getElementById('item-category').textContent = item.category_name || 'Uncategorized';
            document.getElementById('item-date').textContent = `Posted on: ${formatDate(item.date_created)}`;
            document.getElementById('item-price').textContent = formatPrice(item.price);
            
            // Set description
            document.getElementById('item-description').textContent = item.description;
            
            // Set main image
            if (item.images && item.images.length > 0) {
                document.getElementById('main-image').src = `${API_URL}/assets/${item.images[0]}`;
                document.getElementById('main-image').alt = item.title;
                
                // Add thumbnails
                const thumbnailContainer = document.getElementById('thumbnail-container');
                thumbnailContainer.innerHTML = '';
                
                item.images.forEach((image, index) => {
                    const thumbnail = document.createElement('img');
                    thumbnail.src = `${API_URL}/assets/${image}`;
                    thumbnail.alt = `${item.title} - Image ${index + 1}`;
                    thumbnail.className = 'thumbnail';
                    if (index === 0) thumbnail.classList.add('active');
                    
                    thumbnail.addEventListener('click', () => {
                        document.getElementById('main-image').src = thumbnail.src;
                        document.querySelectorAll('.thumbnail').forEach(t => t.classList.remove('active'));
                        thumbnail.classList.add('active');
                    });
                    
                    thumbnailContainer.appendChild(thumbnail);
                });
            }
            
            // Set attributes
            const attributesContainer = document.getElementById('item-attributes');
            attributesContainer.innerHTML = '';
            
            const attributes = [
                { label: 'Condition', value: item.condition || 'Not specified' },
                { label: 'Location', value: item.location || 'Not specified' },
                { label: 'Brand', value: item.brand || 'Not specified' }
            ];
            
            attributes.forEach(attr => {
                const attribute = document.createElement('div');
                attribute.className = 'attribute';
                attribute.innerHTML = `
                    <span class="attribute-label">${attr.label}:</span>
                    <span class="attribute-value">${attr.value}</span>
                `;
                attributesContainer.appendChild(attribute);
            });
            
            // Set seller info
            if (item.user_created) {
                document.getElementById('seller-name').textContent = item.user_created.first_name + ' ' + item.user_created.last_name || 'Anonymous';
                document.getElementById('seller-joined').textContent = `Member since: ${formatDate(item.user_created.date_created)}`;
                
                if (item.user_created.avatar) {
                    document.getElementById('seller-avatar').src = `${API_URL}/assets/${item.user_created.avatar}`;
                }
                
                // Set seller rating
                if (item.user_created.rating) {
                    document.getElementById('rating-value').textContent = item.user_created.rating.toFixed(1);
                }
            }
            
            // Check if the current user is the seller
            if (currentUser && currentUser.id === item.user_created.id) {
                // Show edit controls instead of contact/save buttons
                const actionButtons = document.querySelector('.action-buttons');
                actionButtons.innerHTML = `
                    <button class="action-btn edit-btn" id="edit-btn">
                        <i class="fas fa-edit"></i> Edit Listing
                    </button>
                    <button class="action-btn delete-btn" id="delete-btn">
                        <i class="fas fa-trash"></i> Delete Listing
                    </button>
                `;
                
                // Add event listeners for edit and delete
                document.getElementById('edit-btn').addEventListener('click', () => {
                    window.location.href = `sell.html?edit=${item.id}`;
                });
                
                document.getElementById('delete-btn').addEventListener('click', () => {
                    if (confirm('Are you sure you want to delete this listing?')) {
                        deleteItem(item.id);
                    }
                });
            }
        }

        // Load similar items
        async function loadSimilarItems() {
            try {
                // Get category from the current item
                const category = itemData.category;
                
                const response = await fetch(`${API_URL}/items/listings?filter[category][_eq]=${category}&filter[id][_neq]=${itemId}&limit=4`, {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json'
                    }
                });

                if (!response.ok) {
                    throw new Error('Failed to load similar items');
                }

                const data = await response.json();
                const similarItems = data.data;
                
                // Populate similar items grid
                similarItemsGrid.innerHTML = '';
                
                if (similarItems.length === 0) {
                    document.getElementById('similar-items').style.display = 'none';
                    return;
                }
                
                similarItems.forEach(item => {
                    const card = document.createElement('div');
                    card.className = 'item-card';
                    card.innerHTML = `
                        <img src="${item.images && item.images.length > 0 ? `${API_URL}/assets/${item.images[0]}` : 'https://via.placeholder.com/300x200'}" alt="${item.title}" class="card-img">
                        <div class="card-content">
                            <h3 class="card-title">${item.title}</h3>
                            <div class="card-price">${formatPrice(item.price)}</div>
                            <div class="card-meta">
                                <span>${item.category_name || 'Uncategorized'}</span>
                                <span>${formatDate(item.date_created)}</span>
                            </div>
                        </div>
                    `;
                    
                    card.addEventListener('click', () => {
                        window.location.href = `item.html?id=${item.id}`;
                    });
                    
                    similarItemsGrid.appendChild(card);
                });
            } catch (error) {
                console.error('Error loading similar items:', error);
                document.getElementById('similar-items').style.display = 'none';
            }
        }

        // Set up event listeners
        function setupEventListeners() {
            // Contact seller button
            contactBtn.addEventListener('click', () => {
                if (!currentUser) {
                    alert('Please log in to contact the seller');
                    window.location.href = `login.html?redirect=item.html?id=${itemId}`;
                    return;
                }
                
                // Redirect to messages page with seller ID
                window.location.href = `messages.html?user=${itemData.user_created.id}&item=${itemId}`;
            });
            
            // Save item button
            saveBtn.addEventListener('click', async () => {
                if (!currentUser) {
                    alert('Please log in to save items');
                    window.location.href = `login.html?redirect=item.html?id=${itemId}`;
                    return;
                }
                
                try {
                    const token = localStorage.getItem('authToken');
                    const response = await fetch(`${API_URL}/items/saved_items`, {
                        method: 'POST',
                        headers: {
                            'Authorization': `Bearer ${token}`,
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            user_id: currentUser.id,
                            listing_id: itemId
                        })
                    });

                    if (response.ok) {
                        showSuccess('Item saved to your favorites');
                        saveBtn.innerHTML = '<i class="fas fa-bookmark"></i> Saved';
                        saveBtn.disabled = true;
                    } else {
                        throw new Error('Failed to save item');
                    }
                } catch (error) {
                    console.error('Error saving item:', error);
                    showError('Failed to save item. Please try again later.');
                }
            });
            
            // Report item link
            reportItem.addEventListener('click', (e) => {
                e.preventDefault();
                
                if (!currentUser) {
                    alert('Please log in to report items');
                    window.location.href = `login.html?redirect=item.html?id=${itemId}`;
                    return;
                }
                
                const reason = prompt('Please provide a reason for reporting this item:');
                if (!reason) return;
                
                reportItemToAdmin(itemId, reason);
            });
            
            // Logout button
            document.getElementById('logout-btn').addEventListener('click', (e) => {
                e.preventDefault();
                localStorage.removeItem('authToken');
                window.location.reload();
            });
        }

        // Report item to admin
        async function reportItemToAdmin(itemId, reason) {
            try {
                const token = localStorage.getItem('authToken');
                const response = await fetch(`${API_URL}/items/reports`, {
                    method: 'POST',
                    headers: {
                        'Authorization': `Bearer ${token}`,
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        user_id: currentUser.id,
                        listing_id: itemId,
                        reason: reason
                    })
                });

                if (response.ok) {
                    showSuccess('Your report has been submitted. Thank you for helping to keep our marketplace safe.');
                } else {
                    throw new Error('Failed to submit report');
                }
            } catch (error) {
                console.error('Error reporting item:', error);
                showError('Failed to submit report. Please try again later.');
            }
        }

        // Delete item
        async function deleteItem(itemId) {
            try {
                const token = localStorage.getItem('authToken');
                const response = await fetch(`${API_URL}/items/listings/${itemId}`, {
                    method: 'DELETE',
                    headers: {
                        'Authorization': `Bearer ${token}`,
                        'Content-Type': 'application/json'
                    }
                });

                if (response.ok) {
                    showSuccess('Your listing has been deleted.');
                    setTimeout(() => {
                        window.location.href = 'profile.html?tab=listings';
                    }, 2000);
                } else {
                    throw new Error('Failed to delete listing');
                }
            } catch (error) {
                console.error('Error deleting item:', error);
                showError('Failed to delete listing. Please try again later.');
            }
        }

        // Helper function to show error message
        function showError(message) {
            errorMessage.textContent = message;
            errorMessage.style.display = 'block';
            successMessage.style.display = 'none';
            
            setTimeout(() => {
                errorMessage.style.display = 'none';
            }, 5000);
        }

        // Helper function to show success message
        function showSuccess(message) {
            successMessage.textContent = message;
            successMessage.style.display = 'block';
            errorMessage.style.display = 'none';
            
            setTimeout(() => {
                successMessage.style.display = 'none';
            }, 5000);
        }

        // Helper function to format price
        function formatPrice(price) {
            if (!price) return 'Free';
            return '$' + parseFloat(price).toFixed(2);
        }

        // Helper function to format date
        function formatDate(dateString) {
            if (!dateString) return 'Unknown';
            const date = new Date(dateString);
            return date.toLocaleDateString('en-US', { year: 'numeric', month: 'short', day: 'numeric' });
        }
    </script>
</body>
</html>