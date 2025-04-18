<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages - Comrade Marketing Centre</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f0f2f5;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #0066cc;
            color: white;
            padding: 15px 20px;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            font-size: 1.5rem;
            font-weight: bold;
            color: white;
            text-decoration: none;
        }

        .navbar-brand i {
            margin-right: 10px;
        }

        .navbar-links {
            display: flex;
            gap: 20px;
        }

        .navbar-links a {
            color: white;
            text-decoration: none;
        }

        .navbar-auth {
            display: flex;
            gap: 10px;
        }

        .btn {
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            text-decoration: none;
            border: none;
        }

        .btn-primary {
            background-color: #0066cc;
            color: white;
            border: 1px solid white;
        }

        .btn-light {
            background-color: white;
            color: #0066cc;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
        }

        .messages-container {
            display: flex;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            height: 70vh;
        }

        .contacts-list {
            width: 30%;
            border-right: 1px solid #ddd;
            overflow-y: auto;
        }

        .contact {
            padding: 15px;
            border-bottom: 1px solid #ddd;
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        .contact.active {
            background-color: #f0f2f5;
        }

        .contact:hover {
            background-color: #f5f7fa;
        }

        .contact-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #0066cc;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            font-weight: bold;
        }

        .contact-info {
            flex-grow: 1;
        }

        .contact-name {
            font-weight: bold;
        }

        .contact-preview {
            color: #888;
            font-size: 0.9rem;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .chat-area {
            width: 70%;
            display: flex;
            flex-direction: column;
        }

        .chat-header {
            padding: 15px;
            border-bottom: 1px solid #ddd;
            display: flex;
            align-items: center;
        }

        .chat-messages {
            flex-grow: 1;
            padding: 15px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .message {
            max-width: 70%;
            padding: 10px 15px;
            border-radius: 18px;
            position: relative;
        }

        .message.received {
            background-color: #f0f2f5;
            align-self: flex-start;
        }

        .message.sent {
            background-color: #0066cc;
            color: white;
            align-self: flex-end;
        }

        .message-time {
            font-size: 0.75rem;
            color: #888;
            margin-top: 5px;
            text-align: right;
        }

        .message.sent .message-time {
            color: rgba(255, 255, 255, 0.8);
        }

        .chat-input {
            padding: 15px;
            border-top: 1px solid #ddd;
            display: flex;
            gap: 10px;
        }

        .chat-input input {
            flex-grow: 1;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 20px;
            outline: none;
        }

        .chat-input button {
            background-color: #0066cc;
            color: white;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .no-chat-selected {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            color: #888;
            font-size: 1.2rem;
            flex-direction: column;
            gap: 15px;
        }

        .no-chat-selected i {
            font-size: 3rem;
            color: #0066cc;
        }

        /* For when user is not logged in */
        .login-prompt {
            text-align: center;
            padding: 50px 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .login-prompt h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .login-prompt p {
            margin-bottom: 30px;
            color: #666;
        }

        .login-prompt .btn {
            display: inline-block;
            margin: 0 10px;
        }

        /* Loading indicator */
        .loading {
            text-align: center;
            padding: 20px;
        }

        .spinner {
            border: 4px solid rgba(0, 0, 0, 0.1);
            border-radius: 50%;
            border-top: 4px solid #0066cc;
            width: 40px;
            height: 40px;
            animation: spin 1s linear infinite;
            margin: 0 auto 15px;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .messages-container {
                flex-direction: column;
                height: 85vh;
            }
            
            .contacts-list, .chat-area {
                width: 100%;
            }
            
            .contacts-list {
                height: 30%;
                border-right: none;
                border-bottom: 1px solid #ddd;
            }
            
            .chat-area {
                height: 70%;
            }
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="index.html" class="navbar-brand">
            <i class="fas fa-store"></i>
            Comrade Marketing Centre
        </a>
        <div class="navbar-links">
            <a href="index.html">Home</a>
            <a href="browse.html">Browse</a>
            <a href="#">About</a>
        </div>
        <div class="navbar-auth" id="navAuth">
            <!-- Will be populated by JavaScript -->
            <a href="login.html" class="btn btn-primary">Login</a>
            <a href="register.html" class="btn btn-light">Register</a>
        </div>
    </div>

    <div class="container">
        <div id="messagesContent">
            <!-- Content will be populated by JavaScript -->
            <div class="loading">
                <div class="spinner"></div>
                <p>Loading your messages...</p>
            </div>
        </div>
    </div>

    <script>
        // Base URL for Directus API
        const DIRECTUS_URL = 'http://localhost:8055';
        
        // DOM elements
        const messagesContent = document.getElementById('messagesContent');
        const navAuth = document.getElementById('navAuth');
        
        // Check authentication status
        async function checkAuth() {
            const token = localStorage.getItem('authToken');
            const userId = localStorage.getItem('userId');
            
            if (!token || !userId) {
                showLoginPrompt();
                updateNavbar(false);
                return false;
            }
            
            try {
                // Verify token is still valid
                const response = await fetch(`${DIRECTUS_URL}/users/me`, {
                    method: 'GET',
                    headers: {
                        'Authorization': `Bearer ${token}`
                    }
                });
                
                if (!response.ok) {
                    throw new Error('Token invalid');
                }
                
                updateNavbar(true);
                return true;
            } catch (error) {
                console.error('Auth error:', error);
                localStorage.removeItem('authToken');
                localStorage.removeItem('userId');
                localStorage.removeItem('userEmail');
                showLoginPrompt();
                updateNavbar(false);
                return false;
            }
        }
        
        // Update navbar based on auth status
        function updateNavbar(isLoggedIn) {
            if (isLoggedIn) {
                const userEmail = localStorage.getItem('userEmail');
                navAuth.innerHTML = `
                    <a href="messages.html" class="btn btn-primary">Messages</a>
                    <a href="profile.html" class="btn btn-primary">Profile</a>
                    <button class="btn btn-light" onclick="logout()">Logout</button>
                `;
            } else {
                navAuth.innerHTML = `
                    <a href="login.html" class="btn btn-primary">Login</a>
                    <a href="register.html" class="btn btn-light">Register</a>
                `;
            }
        }
        
        // Show login prompt for unauthenticated users
        function showLoginPrompt() {
            messagesContent.innerHTML = `
                <div class="login-prompt">
                    <h2>Access Your Messages</h2>
                    <p>Please log in to view and send messages to other users</p>
                    <a href="login.html" class="btn btn-primary">Login</a>
                    <a href="register.html" class="btn btn-light">Register</a>
                </div>
            `;
        }
        
        // Logout function
        function logout() {
            localStorage.removeItem('authToken');
            localStorage.removeItem('userId');
            localStorage.removeItem('userEmail');
            window.location.href = 'index.html';
        }
        
        // Load user conversations
        async function loadConversations() {
            const token = localStorage.getItem('authToken');
            const userId = localStorage.getItem('userId');
            
            try {
                // Get conversations where the user is either the sender or receiver
                const response = await fetch(`${DIRECTUS_URL}/items/messages?filter[_or][0][sender_id][_eq]=${userId}&filter[_or][1][receiver_id][_eq]=${userId}&fields=*,sender_id.id,sender_id.first_name,sender_id.last_name,sender_id.email,receiver_id.id,receiver_id.first_name,receiver_id.last_name,receiver_id.email&sort=-date_updated&groupBy=conversation_id`, {
                    method: 'GET',
                    headers: {
                        'Authorization': `Bearer ${token}`
                    }
                });
                
                if (!response.ok) {
                    throw new Error('Failed to load conversations');
                }
                
                const data = await response.json();
                
                // Process conversations to get unique chat partners
                const conversations = {};
                
                data.data.forEach(msg => {
                    // Determine if user is sender or receiver
                    const isUserSender = msg.sender_id.id === userId;
                    const partnerId = isUserSender ? msg.receiver_id.id : msg.sender_id.id;
                    const partnerName = isUserSender 
                        ? `${msg.receiver_id.first_name} ${msg.receiver_id.last_name}`
                        : `${msg.sender_id.first_name} ${msg.sender_id.last_name}`;
                    const partnerEmail = isUserSender ? msg.receiver_id.email : msg.sender_id.email;
                    
                    // Group by chat partner
                    if (!conversations[partnerId]) {
                        conversations[partnerId] = {
                            id: partnerId,
                            name: partnerName,
                            email: partnerEmail,
                            lastMessage: msg.message,
                            lastMessageDate: new Date(msg.date_created),
                            conversation_id: msg.conversation_id
                        };
                    }
                });
                
                renderConversations(Object.values(conversations));
            } catch (error) {
                console.error('Error loading conversations:', error);
                messagesContent.innerHTML = `
                    <div class="login-prompt">
                        <h2>Error Loading Messages</h2>
                        <p>There was a problem loading your conversations. Please try again later.</p>
                    </div>
                `;
            }
        }
        
        // Render conversations list
        function renderConversations(conversations) {
            if (conversations.length === 0) {
                messagesContent.innerHTML = `
                    <div class="login-prompt">
                        <h2>No Messages Yet</h2>
                        <p>You don't have any conversations yet. Browse items and contact sellers to start messaging!</p>
                        <a href="browse.html" class="btn btn-primary">Browse Items</a>
                    </div>
                `;
                return;
            }
            
            // Sort conversations by date (newest first)
            conversations.sort((a, b) => b.lastMessageDate - a.lastMessageDate);
            
            // Create messages UI
            messagesContent.innerHTML = `
                <div class="messages-container">
                    <div class="contacts-list" id="contactsList">
                        ${conversations.map((conv, index) => `
                            <div class="contact ${index === 0 ? 'active' : ''}" data-partner-id="${conv.id}" data-conversation-id="${conv.conversation_id}" onclick="selectConversation('${conv.id}', '${conv.name}', '${conv.conversation_id}')">
                                <div class="contact-avatar">${conv.name.charAt(0)}</div>
                                <div class="contact-info">
                                    <div class="contact-name">${conv.name}</div>
                                    <div class="contact-preview">${conv.lastMessage}</div>
                                </div>
                            </div>
                        `).join('')}
                    </div>
                    <div class="chat-area" id="chatArea">
                        <div class="no-chat-selected">
                            <i class="fas fa-comments"></i>
                            <p>Select a conversation to start chatting</p>
                        </div>
                    </div>
                </div>
            `;
            
            // Select first conversation by default if available
            if (conversations.length > 0) {
                selectConversation(conversations[0].id, conversations[0].name, conversations[0].conversation_id);
            }
        }
        
        // Select a conversation and load messages
        async function selectConversation(partnerId, partnerName, conversationId) {
            const token = localStorage.getItem('authToken');
            const userId = localStorage.getItem('userId');
            
            // Update active contact
            const contacts = document.querySelectorAll('.contact');
            contacts.forEach(contact => {
                contact.classList.remove('active');
                if (contact.dataset.partnerId === partnerId) {
                    contact.classList.add('active');
                }
            });
            
            // Show loading in chat area
            const chatArea = document.getElementById('chatArea');
            chatArea.innerHTML = `
                <div class="chat-header">
                    <div class="contact-avatar">${partnerName.charAt(0)}</div>
                    <div class="contact-info">
                        <div class="contact-name">${partnerName}</div>
                    </div>
                </div>
                <div class="loading">
                    <div class="spinner"></div>
                    <p>Loading messages...</p>
                </div>
            `;
            
            try {
                // Fetch messages for this conversation
                const response = await fetch(`${DIRECTUS_URL}/items/messages?filter[conversation_id][_eq]=${conversationId}&sort=date_created`, {
                    method: 'GET',
                    headers: {
                        'Authorization': `Bearer ${token}`
                    }
                });
                
                if (!response.ok) {
                    throw new Error('Failed to load messages');
                }
                
                const data = await response.json();
                renderMessages(data.data, partnerId, partnerName, conversationId);
            } catch (error) {
                console.error('Error loading messages:', error);
                chatArea.innerHTML = `
                    <div class="chat-header">
                        <div class="contact-avatar">${partnerName.charAt(0)}</div>
                        <div class="contact-info">
                            <div class="contact-name">${partnerName}</div>
                        </div>
                    </div>
                    <div class="no-chat-selected">
                        <p>Error loading messages. Please try again.</p>
                    </div>
                `;
            }
        }
        
        // Render messages for selected conversation
        function renderMessages(messages, partnerId, partnerName, conversationId) {
            const userId = localStorage.getItem('userId');
            const chatArea = document.getElementById('chatArea');
            
            chatArea.innerHTML = `
                <div class="chat-header">
                    <div class="contact-avatar">${partnerName.charAt(0)}</div>
                    <div class="contact-info">
                        <div class="contact-name">${partnerName}</div>
                    </div>
                </div>
                <div class="chat-messages" id="chatMessages">
                    ${messages.map(msg => {
                        const isSent = msg.sender_id === userId;
                        const messageDate = new Date(msg.date_created);
                        const formattedTime = messageDate.toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'});
                        const formattedDate = messageDate.toLocaleDateString();
                        
                        return `
                            <div class="message ${isSent ? 'sent' : 'received'}">
                                <div class="message-content">${msg.message}</div>
                                <div class="message-time">${formattedTime} - ${formattedDate}</div>
                            </div>
                        `;
                    }).join('')}
                </div>
                <div class="chat-input">
                    <input type="text" id="messageInput" placeholder="Type a message..." onkeypress="if(event.key === 'Enter') sendMessage('${partnerId}', '${conversationId}')">
                    <button onclick="sendMessage('${partnerId}', '${conversationId}')">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
            `;
            
            // Scroll to bottom of messages
            const chatMessages = document.getElementById('chatMessages');
            chatMessages.scrollTop = chatMessages.scrollHeight;
            
            // Focus on input
            document.getElementById('messageInput').focus();
        }
        
        // Send a new message
        async function sendMessage(receiverId, conversationId) {
            const messageInput = document.getElementById('messageInput');
            const message = messageInput.value.trim();
            
            if (!message) return;
            
            const token = localStorage.getItem('authToken');
            const userId = localStorage.getItem('userId');
            
            // Clear input
            messageInput.value = '';
            
            // Add message to UI immediately
            const chatMessages = document.getElementById('chatMessages');
            const messageDate = new Date();
            const formattedTime = messageDate.toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'});
            const formattedDate = messageDate.toLocaleDateString();
            
            chatMessages.innerHTML += `
                <div class="message sent">
                    <div class="message-content">${message}</div>
                    <div class="message-time">${formattedTime} - ${formattedDate}</div>
                </div>
            `;
            
            // Scroll to bottom
            chatMessages.scrollTop = chatMessages.scrollHeight;
            
            try {
                // Create or use existing conversation ID
                let convoId = conversationId;
                if (!convoId || convoId === 'undefined') {
                    // Generate a unique conversation ID
                    convoId = `${userId}_${receiverId}_${Date.now()}`;
                }
                
                // Send message to API
                const response = await fetch(`${DIRECTUS_URL}/items/messages`, {
                    method: 'POST',
                    headers: {
                        'Authorization': `Bearer ${token}`,
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        sender_id: userId,
                        receiver_id: receiverId,
                        message: message,
                        conversation_id: convoId,
                        read: false
                    })
                });
                
                if (!response.ok) {
                    throw new Error('Failed to send message');
                }
                
                // Update conversation list to show latest message
                // In a real app, you might want to reload the conversations here
                // or use WebSockets for real-time updates
            } catch (error) {
                console.error('Error sending message:', error);
                alert('Failed to send message. Please try again.');
            }
        }
        
        // Initialize the page
        async function initPage() {
            const isAuthenticated = await checkAuth();
            if (isAuthenticated) {
                loadConversations();
            }
        }
        
        // Start the application
        initPage();
    </script>
</body>
</html>