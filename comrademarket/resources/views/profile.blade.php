<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - Comrade Marketing Centre</title>
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
        
        a {
            text-decoration: none;
            color: #0066cc;
        }
        
        /* Header Styles */
        header {
            background-color: #0275d8;
            color: white;
            padding: 15px 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .logo-container {
            display: flex;
            align-items: center;
        }
        
        .logo-icon {
            font-size: 24px;
            margin-right: 10px;
        }
        
        .logo-text {
            font-size: 20px;
            font-weight: bold;
        }
        
        .nav-links {
            display: flex;
            gap: 20px;
        }
        
        .nav-links a {
            color: white;
            padding: 5px 10px;
        }
        
        .auth-buttons {
            display: flex;
            gap: 10px;
        }
        
        .btn {
            padding: 8px 16px;
            border-radius: 4px;
            font-weight: bold;
            cursor: pointer;
            border: none;
            font-size: 14px;
        }
        
        .btn-primary {
            background-color: #0275d8;
            color: white;
            border: 1px solid white;
        }
        
        .btn-light {
            background-color: white;
            color: #0275d8;
        }
        
        /* Main Content Styles */
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
        }
        
        .page-title {
            text-align: center;
            margin: 30px 0;
            color: #333;
            font-size: 36px;
        }
        
        /* Profile Specific Styles */
        .profile-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        
        .profile-sidebar {
            flex: 1;
            min-width: 300px;
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .profile-content {
            flex: 3;
            min-width: 300px;
        }
        
        .profile-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .profile-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            overflow: hidden;
        }
        
        .profile-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .profile-avatar-placeholder {
            font-size: 40px;
            color: #888;
        }
        
        .profile-info h1 {
            font-size: 24px;
            margin-bottom: 5px;
        }
        
        .profile-stats {
            color: #666;
            display: flex;
            gap: 15px;
        }
        
        .profile-stat {
            display: flex;
            align-items: center;
        }
        
        .profile-stat-icon {
            margin-right: 5px;
        }
        
        .profile-actions {
            margin-top: 20px;
        }
        
        .section-title {
            font-size: 18px;
            margin: 15px 0;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }
        
        /* Tabs */
        .profile-tabs {
            display: flex;
            background-color: white;
            border-radius: 8px 8px 0 0;
            overflow: hidden;
            margin-bottom: 1px;
        }
        
        .profile-tab {
            padding: 15px 25px;
            cursor: pointer;
            background-color: #f8f9fa;
            transition: all 0.2s ease;
        }
        
        .profile-tab.active {
            background-color: white;
            font-weight: bold;
            border-bottom: 3px solid #0275d8;
        }
        
        .profile-tab:hover:not(.active) {
            background-color: #e9ecef;
        }
        
        .tab-content {
            display: none;
            background-color: white;
            border-radius: 0 0 8px 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .tab-content.active {
            display: block;
        }
        
        /* Listings Grid */
        .listings-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        
        .listing-card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }
        
        .listing-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .listing-image {
            height: 150px;
            background-color: #eee;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
        
        .listing-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .listing-details {
            padding: 15px;
        }
        
        .listing-title {
            font-weight: bold;
            margin-bottom: 5px;
            font-size: 16px;
        }
        
        .listing-price {
            color: #0275d8;
            font-weight: bold;
        }
        
        .listing-date {
            color: #666;
            font-size: 13px;
            margin-top: 5px;
        }
        
        /* Reviews Section */
        .reviews-list {
            margin-top: 20px;
        }
        
        .review-item {
            padding: 15px;
            border-bottom: 1px solid #eee;
        }
        
        .review-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        
        .reviewer-info {
            display: flex;
            align-items: center;
        }
        
        .reviewer-avatar {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #ddd;
            margin-right: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
        
        .reviewer-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .reviewer-name {
            font-weight: bold;
        }
        
        .review-rating {
            color: #f8bc00;
        }
        
        .review-date {
            color: #666;
            font-size: 13px;
        }
        
        .review-text {
            margin-top: 5px;
            color: #444;
        }
        
        /* Contact Form */
        .contact-form {
            margin-top: 20px;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        
        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }
        
        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }
        
        .btn-block {
            display: block;
            width: 100%;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .profile-container {
                flex-direction: column;
            }
            
            .listings-grid {
                grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo-container">
                <span class="logo-icon">📦</span>
                <a href="index.html" class="logo-text">Comrade Marketing Centre</a>
            </div>
            <div class="nav-links">
                <a href="index.html">Home</a>
                <a href="browse.html">Browse</a>
                <a href="about.html">About</a>
            </div>
            <div class="auth-buttons" id="authButtons">
                <!-- Buttons will be added by JavaScript -->
            </div>
        </div>
    </header>

    <div class="container">
        <div class="profile-container">
            <div class="profile-sidebar">
                <div class="profile-header">
                    <div class="profile-avatar" id="profileAvatar">
                        <span class="profile-avatar-placeholder">👤</span>
                    </div>
                    <div class="profile-info">
                        <h1 id="profileName">Loading...</h1>
                        <div class="profile-stats">
                            <div class="profile-stat">
                                <span class="profile-stat-icon">📦</span>
                                <span id="listingsCount">0</span> listings
                            </div>
                            <div class="profile-stat">
                                <span class="profile-stat-icon">⭐</span>
                                <span id="ratingAvg">0</span> (<span id="reviewsCount">0</span> reviews)
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="section-title">Contact Info</div>
                <p id="profileEmail">Email: Loading...</p>
                <p id="profilePhone">Phone: Loading...</p>
                <p id="profileUniversity">University: Loading...</p>
                
                <div id="profileActions" class="profile-actions">
                    <button class="btn btn-primary btn-block" id="messageButton">Send Message</button>
                </div>
            </div>
            
            <div class="profile-content">
                <div class="profile-tabs">
                    <div class="profile-tab active" data-tab="listings">Listings</div>
                    <div class="profile-tab" data-tab="reviews">Reviews</div>
                    <div class="profile-tab" data-tab="contact">Contact</div>
                    <div class="profile-tab" id="settingsTab" style="display: none;" data-tab="settings">Settings</div>
                </div>
                
                <!-- Listings Tab -->
                <div class="tab-content active" id="listingsTab">
                    <div class="listings-grid" id="userListings">
                        <!-- Listings will be added by JavaScript -->
                        <div class="loading-message">Loading listings...</div>
                    </div>
                </div>
                
                <!-- Reviews Tab -->
                <div class="tab-content" id="reviewsTab">
                    <div class="reviews-list" id="userReviews">
                        <!-- Reviews will be added by JavaScript -->
                        <div class="loading-message">Loading reviews...</div>
                    </div>
                </div>
                
                <!-- Contact Tab -->
                <div class="tab-content" id="contactTab">
                    <div class="contact-form">
                        <div class="form-group">
                            <label for="contactSubject">Subject</label>
                            <input type="text" id="contactSubject" class="form-control" placeholder="What's this about?">
                        </div>
                        <div class="form-group">
                            <label for="contactMessage">Message</label>
                            <textarea id="contactMessage" class="form-control" placeholder="Write your message here..."></textarea>
                        </div>
                        <button class="btn btn-primary btn-block" id="sendContactMessage">Send Message</button>
                    </div>
                </div>
                
                <!-- Settings Tab (Only visible for own profile) -->
                <div class="tab-content" id="settingsTab">
                    <div class="form-group">
                        <label for="settingsName">Display Name</label>
                        <input type="text" id="settingsName" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="settingsEmail">Email</label>
                        <input type="email" id="settingsEmail" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="settingsPhone">Phone</label>
                        <input type="text" id="settingsPhone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="settingsUniversity">University</label>
                        <input type="text" id="settingsUniversity" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="settingsPassword">New Password (leave blank to keep current)</label>
                        <input type="password" id="settingsPassword" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="settingsConfirmPassword">Confirm New Password</label>
                        <input type="password" id="settingsConfirmPassword" class="form-control">
                    </div>
                    <button class="btn btn-primary btn-block" id="saveSettings">Save Changes</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Directus API Configuration
        const DIRECTUS_URL = 'http://localhost:8055';
        const API_URL = `${DIRECTUS_URL}/items`;
        
        // Auth state management
        let currentUser = null;
        let authToken = localStorage.getItem('authToken');
        let viewedUserId = null;
        
        // DOM Elements
        const authButtonsContainer = document.getElementById('authButtons');
        const profileName = document.getElementById('profileName');
        const profileAvatar = document.getElementById('profileAvatar');
        const profileEmail = document.getElementById('profileEmail');
        const profilePhone = document.getElementById('profilePhone');
        const profileUniversity = document.getElementById('profileUniversity');
        const listingsCount = document.getElementById('listingsCount');
        const ratingAvg = document.getElementById('ratingAvg');
        const reviewsCount = document.getElementById('reviewsCount');
        const messageButton = document.getElementById('messageButton');
        const settingsTab = document.getElementById('settingsTab');
        const userListings = document.getElementById('userListings');
        const userReviews = document.getElementById('userReviews');
        
        // Helper Functions
        function updateAuthButtons() {
            if (authToken) {
                authButtonsContainer.innerHTML = `
                    <button class="btn btn-primary" id="profileBtn">Profile</button>
                    <button class="btn btn-light" id="logoutBtn">Logout</button>
                `;
                document.getElementById('profileBtn').addEventListener('click', () => {
                    window.location.href = `profile.html?id=${currentUser.id}`;
                });
                document.getElementById('logoutBtn').addEventListener('click', logout);
            } else {
                authButtonsContainer.innerHTML = `
                    <a href="login.html" class="btn btn-primary">Login</a>
                    <a href="register.html" class="btn btn-light">Register</a>
                `;
            }
        }
        
        function logout() {
            localStorage.removeItem('authToken');
            localStorage.removeItem('currentUser');
            authToken = null;
            currentUser = null;
            updateAuthButtons();
            window.location.href = 'index.html';
        }
        
        // Tab Navigation
        document.querySelectorAll('.profile-tab').forEach(tab => {
            tab.addEventListener('click', () => {
                // Remove active class from all tabs and tab content
                document.querySelectorAll('.profile-tab').forEach(t => t.classList.remove('active'));
                document.querySelectorAll('.tab-content').forEach(t => t.classList.remove('active'));
                
                // Add active class to clicked tab and corresponding content
                tab.classList.add('active');
                const tabId = tab.getAttribute('data-tab');
                document.getElementById(`${tabId}Tab`).classList.add('active');
            });
        });
        
        // Fetch current user if logged in
        async function getCurrentUser() {
            if (!authToken) return null;
            
            try {
                const response = await fetch(`${DIRECTUS_URL}/users/me`, {
                    method: 'GET',
                    headers: {
                        'Authorization': `Bearer ${authToken}`,
                        'Content-Type': 'application/json'
                    }
                });
                
                if (response.ok) {
                    const userData = await response.json();
                    currentUser = userData.data;
                    localStorage.setItem('currentUser', JSON.stringify(currentUser));
                    return currentUser;
                } else {
                    // Token might be invalid or expired
                    localStorage.removeItem('authToken');
                    localStorage.removeItem('currentUser');
                    authToken = null;
                    return null;
                }
            } catch (error) {
                console.error('Error fetching current user:', error);
                return null;
            }
        }
        
        // Fetch user data by ID
        async function getUserById(userId) {
            try {
                const response = await fetch(`${API_URL}/users/${userId}`, {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json',
                        ...(authToken && { 'Authorization': `Bearer ${authToken}` })
                    }
                });
                
                if (response.ok) {
                    const userData = await response.json();
                    return userData.data;
                } else {
                    console.error('Error fetching user:', await response.text());
                    return null;
                }
            } catch (error) {
                console.error('Error fetching user:', error);
                return null;
            }
        }
        
        // Fetch user listings
        async function getUserListings(userId) {
            try {
                const response = await fetch(`${API_URL}/listings?filter[user_created][_eq]=${userId}&sort=-date_created`, {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json',
                        ...(authToken && { 'Authorization': `Bearer ${authToken}` })
                    }
                });
                
                if (response.ok) {
                    const listingsData = await response.json();
                    return listingsData.data || [];
                } else {
                    console.error('Error fetching listings:', await response.text());
                    return [];
                }
            } catch (error) {
                console.error('Error fetching listings:', error);
                return [];
            }
        }
        
        // Fetch user reviews
        async function getUserReviews(userId) {
            try {
                const response = await fetch(`${API_URL}/reviews?filter[user_id][_eq]=${userId}&sort=-date_created`, {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json',
                        ...(authToken && { 'Authorization': `Bearer ${authToken}` })
                    }
                });
                
                if (response.ok) {
                    const reviewsData = await response.json();
                    return reviewsData.data || [];
                } else {
                    console.error('Error fetching reviews:', await response.text());
                    return [];
                }
            } catch (error) {
                console.error('Error fetching reviews:', error);
                return [];
            }
        }
        
        // Display user profile
        function displayUserProfile(user) {
            if (!user) {
                profileName.textContent = 'User not found';
                return;
            }
            
            // Set user info
            profileName.textContent = user.first_name + ' ' + user.last_name;
            profileEmail.textContent = `Email: ${user.email || 'Not provided'}`;
            profilePhone.textContent = `Phone: ${user.phone || 'Not provided'}`;
            profileUniversity.textContent = `University: ${user.university || 'Not provided'}`;
            
            // Set avatar if available
            if (user.avatar) {
                profileAvatar.innerHTML = `<img src="${DIRECTUS_URL}/assets/${user.avatar}" alt="${user.first_name}">`;
            }
            
            // Show settings tab if viewing own profile
            if (currentUser && user.id === currentUser.id) {
                settingsTab.style.display = 'block';
                messageButton.style.display = 'none';
                
                // Pre-fill settings form
                document.getElementById('settingsName').value = user.first_name + ' ' + user.last_name;
                document.getElementById('settingsEmail').value = user.email || '';
                document.getElementById('settingsPhone').value = user.phone || '';
                document.getElementById('settingsUniversity').value = user.university || '';
            } else {
                settingsTab.style.display = 'none';
                messageButton.style.display = 'block';
                
                // Setup message button to redirect to messages page
                messageButton.addEventListener('click', () => {
                    window.location.href = `messages.html?userId=${user.id}`;
                });
            }
        }
        
        // Display user listings
        function displayUserListings(listings) {
            if (!listings || listings.length === 0) {
                userListings.innerHTML = '<p>No listings found</p>';
                return;
            }
            
            listingsCount.textContent = listings.length;
            
            let listingsHTML = '';
            listings.forEach(listing => {
                const imageUrl = listing.images && listing.images.length > 0 
                    ? `${DIRECTUS_URL}/assets/${listing.images[0]}` 
                    : 'https://via.placeholder.com/200';
                
                const date = new Date(listing.date_created).toLocaleDateString();
                
                listingsHTML += `
                    <a href="item.html?id=${listing.id}" class="listing-card">
                        <div class="listing-image">
                            <img src="${imageUrl}" alt="${listing.title}">
                        </div>
                        <div class="listing-details">
                            <div class="listing-title">${listing.title}</div>
                            <div class="listing-price">$${parseFloat(listing.price).toFixed(2)}</div>
                            <div class="listing-date">Posted on ${date}</div>
                        </div>
                    </a>
                `;
            });
            
            userListings.innerHTML = listingsHTML;
        }
        
        // Display user reviews
        function displayUserReviews(reviews) {
            if (!reviews || reviews.length === 0) {
                userReviews.innerHTML = '<p>No reviews yet</p>';
                ratingAvg.textContent = 'N/A';
                reviewsCount.textContent = '0';
                return;
            }
            
            reviewsCount.textContent = reviews.length;
            
            // Calculate average rating
            const avgRating = reviews.reduce((sum, review) => sum + review.rating, 0) / reviews.length;
            ratingAvg.textContent = avgRating.toFixed(1);
            
            let reviewsHTML = '';
            reviews.forEach(async review => {
                const date = new Date(review.date_created).toLocaleDateString();
                
                // Fetch reviewer info
                let reviewerName = 'Anonymous';
                if (review.reviewer_id) {
                    const reviewer = await getUserById(review.reviewer_id);
                    if (reviewer) {
                        reviewerName = reviewer.first_name + ' ' + reviewer.last_name;
                    }
                }
                
                // Generate stars based on rating
                let stars = '';
                for (let i = 0; i < 5; i++) {
                    if (i < review.rating) {
                        stars += '★';
                    } else {
                        stars += '☆';
                    }
                }
                
                reviewsHTML += `
                    <div class="review-item">
                        <div class="review-header">
                            <div class="reviewer-info">
                                <div class="reviewer-avatar">👤</div>
                                <div class="reviewer-name">${reviewerName}</div>
                            </div>
                            <div>
                                <div class="review-rating">${stars}</div>
                                <div class="review-date">${date}</div>
                            </div>
                        </div>
                        <div class="review-text">${review.comment || 'No comment provided.'}</div>
                    </div>
                `;
            });
            
            userReviews.innerHTML = reviewsHTML;
        }
        
        // Send message function
        async function sendMessage(receiverId, subject, message) {
            if (!authToken || !currentUser) {
                alert('You must be logged in to send messages');
                window.location.href = 'login.html';
                return;
            }
            
            try {
                const response = await fetch(`${API_URL}/messages`, {
                    method: 'POST',
                    headers: {
                        'Authorization': `Bearer ${authToken}`,
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        sender_id: currentUser.id,
                        receiver_id: receiverId,
                        subject: subject,
                        message: message,
                        date_created: new Date().toISOString()
                    })
                });
                
                if (response.ok) {
                    alert('Message sent successfully!');
                    document.getElementById('contactSubject').value = '';
                    document.getElementById('contactMessage').value = '';
                } else {
                    alert('Failed to send message');
                    console.error('Error sending message:', await response.text());
                }
            } catch (error) {
                alert('Error sending message');
                console.error('Error sending message:', error);
            }
        }
        
        // Save user settings
        async function saveUserSettings() {
            if (!authToken || !currentUser) {
                alert('You must be logged in to update your profile');
                return;
            }
            
            const nameInput = document.getElementById('settingsName').value;
            const names = nameInput.split(' ');
            const firstName = names[0] || '';
            const lastName = names.slice(1).join(' ') || '';
            
            const email = document.getElementById('settingsEmail').value;
            const phone = document.getElementById('settingsPhone').value;
            const university = document.getElementById('settingsUniversity').value;
            const password = document.getElementById('settingsPassword').value;
            const confirmPassword = document.getElementById('settingsConfirmPassword').value;
            
            // Validate inputs
            if (!email) {
                alert('Email is required');
                return;
            }
            
            if (password && password !== confirmPassword) {
                alert('Passwords do not match');
                return;
            }
            
            // Prepare update data
            const updateData = {
                first_name: firstName,
                last_name: lastName,
                email: email,
                phone: phone,
                university: university
            };
            
            // Add password if provided
            if (password) {
                updateData.password = password;
            }
            
            try {
                const response = await fetch(`${DIRECTUS_URL}/users/${currentUser.id}`, {
                    method: 'PATCH',
                    headers: {
                        'Authorization': `Bearer ${authToken}`,
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(updateData)
                });
                
                if (response.ok) {
                    alert('Profile updated successfully!');
                    // Refresh user data
                    currentUser = await getCurrentUser();
                    displayUserProfile(currentUser);
                } else {
                    alert('Failed to update profile');
                    console.error('Error updating profile:', await response.text());
                }
            } catch (error) {
                alert('Error updating profile');
                console.error('Error updating profile:', error);
            }
        }
        
        // Initialize page
        async function initPage() {
            // Get user ID from URL
            const urlParams = new URLSearchParams(window.location.search);
            viewedUserId = urlParams.get('id');
            
            // If no ID in URL, try to show current user's profile
            if (!viewedUserId) {
                // Try to get current user
                currentUser = await getCurrentUser() || JSON.parse(localStorage.getItem('currentUser'));
                if (currentUser) {
                    viewedUserId = currentUser.id;
                } else {
                    // Redirect to login if not logged in
                    window.location.href = 'login.html';
                    return;
                }
            }
            
            // Update auth buttons
            updateAuthButtons();
            
            // Fetch user data
            const userData = await getUserById(viewedUserId);
            displayUserProfile(userData);
            
            // Fetch and display user listings
            const userListingsData = await getUserListings(viewedUserId);
            displayUserListings(userListingsData);
            
            // Fetch and display user reviews
            const userReviewsData = await getUserReviews(viewedUserId);
            displayUserReviews(userReviewsData);
            
            // Add event listeners
            document.getElementById('sendContactMessage').addEventListener('click', () => {
                const subject = document.getElementById('contactSubject').value;
                const message = document.getElementById('contactMessage').value;
                
                if (!subject || !message) {
                    alert('Please fill in all fields');
                    return;
                }
                
                sendMessage(viewedUserId, subject, message);
            });
            
            // Add save settings event listener if viewing own profile
            if (currentUser && viewedUserId === currentUser.id) {
                document.getElementById('saveSettings').addEventListener('click', saveUserSettings);
            }
        }
        
        // Start the page initialization when DOM is loaded
        document.addEventListener('DOMContentLoaded', initPage);
    </script>
</body>
</html>