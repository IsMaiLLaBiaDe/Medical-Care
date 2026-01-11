<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Light Chatting System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        
        .chat-container {
            width: 100%;
            max-width: 900px;
            height: 85vh;
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            display: flex;
            overflow: hidden;
            position: relative;
        }
        
        /* Sidebar Styles */
        .sidebar {
            width: 30%;
            background-color: #f8f9fa;
            border-right: 1px solid #eaeaea;
            display: flex;
            flex-direction: column;
            padding: 20px 0;
        }
        
        .user-profile {
            display: flex;
            align-items: center;
            padding: 15px 20px;
            border-bottom: 1px solid #eaeaea;
        }
        
        .avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 15px;
            background-color: #4a6fa5;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 22px;
        }
        
        .user-info h3 {
            color: #333;
            font-size: 18px;
            margin-bottom: 5px;
        }
        
        .user-info p {
            color: #4CAF50;
            font-size: 13px;
            display: flex;
            align-items: center;
        }
        
        .status-dot {
            width: 8px;
            height: 8px;
            background-color: #4CAF50;
            border-radius: 50%;
            margin-right: 6px;
        }
        
        .contacts {
            flex-grow: 1;
            overflow-y: auto;
            padding: 10px 0;
        }
        
        .contact {
            display: flex;
            align-items: center;
            padding: 15px 20px;
            cursor: pointer;
            transition: all 0.2s;
        }
        
        .contact:hover {
            background-color: #eef5ff;
        }
        
        .contact.active {
            background-color: #e0ebff;
        }
        
        .contact-avatar {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }
        
        .contact-info h4 {
            color: #333;
            font-size: 16px;
            margin-bottom: 5px;
        }
        
        .contact-info p {
            color: #777;
            font-size: 13px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 150px;
        }
        
        /* Chat Area Styles */
        .chat-area {
            width: 70%;
            display: flex;
            flex-direction: column;
        }
        
        .chat-header {
            padding: 20px;
            border-bottom: 1px solid #eaeaea;
            display: flex;
            align-items: center;
            background-color: white;
        }
        
        .chat-header-info h3 {
            color: #333;
            font-size: 18px;
            margin-bottom: 5px;
        }
        
        .chat-header-info p {
            color: #777;
            font-size: 14px;
        }
        
        .chat-messages {
            flex-grow: 1;
            padding: 20px;
            overflow-y: auto;
            background-color: #f9f9f9;
            display: flex;
            flex-direction: column;
        }
        
        .message {
            max-width: 70%;
            padding: 12px 16px;
            border-radius: 18px;
            margin-bottom: 15px;
            line-height: 1.4;
            position: relative;
            word-wrap: break-word;
        }
        
        .incoming {
            background-color: white;
            border: 1px solid #eaeaea;
            align-self: flex-start;
            border-bottom-left-radius: 5px;
        }
        
        .outgoing {
            background-color: #4a6fa5;
            color: white;
            align-self: flex-end;
            border-bottom-right-radius: 5px;
        }
        
        .message-sender {
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 5px;
        }
        
        .incoming .message-sender {
            color: #4a6fa5;
        }
        
        .outgoing .message-sender {
            color: #e6f2ff;
        }
        
        .message-time {
            font-size: 11px;
            text-align: right;
            margin-top: 5px;
            opacity: 0.8;
        }
        
        .chat-input {
            padding: 20px;
            border-top: 1px solid #eaeaea;
            background-color: white;
            display: flex;
        }
        
        .message-input {
            flex-grow: 1;
            padding: 12px 18px;
            border: 1px solid #ddd;
            border-radius: 30px;
            font-size: 15px;
            outline: none;
            transition: border 0.3s;
        }
        
        .message-input:focus {
            border-color: #4a6fa5;
        }
        
        .send-button {
            background-color: #4a6fa5;
            color: white;
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-left: 15px;
            cursor: pointer;
            transition: background-color 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .send-button:hover {
            background-color: #3a5a80;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .chat-container {
                flex-direction: column;
                height: 95vh;
            }
            
            .sidebar {
                width: 100%;
                height: 30%;
            }
            
            .chat-area {
                width: 100%;
                height: 70%;
            }
        }
        
        /* Animation for new messages */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .message {
            animation: fadeIn 0.3s ease-out;
        }
        
        /* Scrollbar styling */
        ::-webkit-scrollbar {
            width: 6px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 10px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #a8a8a8;
        }
        
        .chat-title {
            text-align: center;
            padding: 15px;
            color: #4a6fa5;
            font-size: 24px;
            font-weight: 600;
            border-bottom: 1px solid #eaeaea;
        }
    </style>
</head>
<body>
    <div class="chat-container">
        <!-- Sidebar with contacts -->
        <div class="sidebar">
            <div class="chat-title">Light Chat</div>
            
            <div class="user-profile">
                <div class="avatar">You</div>
                <div class="user-info">
                    <h3>You</h3>
                    <p><span class="status-dot"></span> Online</p>
                </div>
            </div>
            
            <div class="contacts">
                <div class="contact active" data-contact="alex">
                    <div class="contact-avatar" style="background-color: #4CAF50;">A</div>
                    <div class="contact-info">
                        <h4>Alex Johnson</h4>
                        <p>Hey, are we meeting tomorrow?</p>
                    </div>
                </div>
                
                <div class="contact" data-contact="sam">
                    <div class="contact-avatar" style="background-color: #FF9800;">S</div>
                    <div class="contact-info">
                        <h4>Sam Rivera</h4>
                        <p>I sent you the project files</p>
                    </div>
                </div>
                
                <div class="contact" data-contact="taylor">
                    <div class="contact-avatar" style="background-color: #9C27B0;">T</div>
                    <div class="contact-info">
                        <h4>Taylor Swift</h4>
                        <p>See you at the concert!</p>
                    </div>
                </div>
                
                <div class="contact" data-contact="jordan">
                    <div class="contact-avatar" style="background-color: #2196F3;">J</div>
                    <div class="contact-info">
                        <h4>Jordan Lee</h4>
                        <p>Meeting rescheduled to Friday</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Main chat area -->
        <div class="chat-area">
            <div class="chat-header">
                <div class="chat-header-info">
                    <h3 id="current-contact">Alex Johnson</h3>
                    <p id="contact-status">Online - Last seen today 10:24 AM</p>
                </div>
            </div>
            
            <div class="chat-messages" id="chat-messages">
                <!-- Messages will be displayed here -->
                <div class="message incoming">
                    <div class="message-sender">Alex Johnson</div>
                    <div>Hey there! How are you doing today?</div>
                    <div class="message-time">10:15 AM</div>
                </div>
                
                <div class="message outgoing">
                    <div class="message-sender">You</div>
                    <div>I'm doing great! Just finished the project proposal.</div>
                    <div class="message-time">10:20 AM</div>
                </div>
                
                <div class="message incoming">
                    <div class="message-sender">Alex Johnson</div>
                    <div>That's awesome! Can you send it over so I can take a look?</div>
                    <div class="message-time">10:22 AM</div>
                </div>
                
                <div class="message outgoing">
                    <div class="message-sender">You</div>
                    <div>Sure thing! I'll email it to you in a few minutes.</div>
                    <div class="message-time">10:24 AM</div>
                </div>
            </div>
            
            <div class="chat-input">
                <input type="text" class="message-input" id="message-input" placeholder="Type your message here...">
                <button class="send-button" id="send-button">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // DOM Elements
            const contacts = document.querySelectorAll('.contact');
            const chatMessages = document.getElementById('chat-messages');
            const messageInput = document.getElementById('message-input');
            const sendButton = document.getElementById('send-button');
            const currentContactElement = document.getElementById('current-contact');
            const contactStatusElement = document.getElementById('contact-status');
            
            // Contact data with conversation history
            // const contactData = {
                // alex: {
                    // name: "Alex Johnson",
                    // status: "Online - Last seen today 10:24 AM",
                    // messages: [
                        // { sender: "alex", text: "Hey there! How are you doing today?", time: "10:15 AM" },
                        // { sender: "you", text: "I'm doing great! Just finished the project proposal.", time: "10:20 AM" },
                        // { sender: "alex", text: "That's awesome! Can you send it over so I can take a look?", time: "10:22 AM" },
                        // { sender: "you", text: "Sure thing! I'll email it to you in a few minutes.", time: "10:24 AM" }
                    // ]
                // },
                // sam: {
                    // name: "Sam Rivera",
                    // status: "Online - Last seen 5 min ago",
                    // messages: [
                        // { sender: "sam", text: "Hey, I sent you the project files. Did you get them?", time: "Yesterday" },
                        // { sender: "you", text: "Yes, got them! Thanks for sending so quickly.", time: "Yesterday" },
                        // { sender: "sam", text: "Great! Let me know if you need anything else.", time: "Today" }
                    // ]
                // },
                // taylor: {
                    // name: "Taylor Swift",
                    // status: "Away - Last seen yesterday",
                    // messages: [
                        // { sender: "taylor", text: "Hey! The concert starts at 7 PM. See you there!", time: "Yesterday" },
                        // { sender: "you", text: "Can't wait! I'll be there by 6:30.", time: "Yesterday" }
                    // ]
                // },
                // jordan: {
                    // name: "Jordan Lee",
                    // status: "Offline - Last seen Monday",
                    // messages: [
                        // { sender: "jordan", text: "Hey, we need to reschedule our meeting to Friday.", time: "Monday" },
                        // { sender: "you", text: "Friday works for me. What time?", time: "Monday" },
                        // { sender: "jordan", text: "How about 2 PM?", time: "Monday" },
                        // { sender: "you", text: "Perfect! I'll update the calendar.", time: "Monday" }
                    // ]
                // }
            // };
            
            let currentContact = 'alex';
            
            // Function to switch contacts
            function switchContact(contactId) {
                // Update active contact in sidebar
                contacts.forEach(contact => {
                    if (contact.dataset.contact === contactId) {
                        contact.classList.add('active');
                    } else {
                        contact.classList.remove('active');
                    }
                });
                
                // Update current contact
                currentContact = contactId;
                const contact = contactData[contactId];
                
                // Update header
                currentContactElement.textContent = contact.name;
                contactStatusElement.textContent = contact.status;
                
                // Clear chat messages
                chatMessages.innerHTML = '';
                
                // Load conversation history
                contact.messages.forEach(message => {
                    addMessageToChat(message.sender, message.text, message.time, false);
                });
                
                // Scroll to bottom of chat
                scrollToBottom();
            }
            
            // Function to add a message to the chat
            function addMessageToChat(sender, text, time, isNew = true) {
                const messageDiv = document.createElement('div');
                messageDiv.classList.add('message');
                
                if (sender === 'you') {
                    messageDiv.classList.add('outgoing');
                    messageDiv.innerHTML = `
                        <div class="message-sender">You</div>
                        <div>${text}</div>
                        <div class="message-time">${time}</div>
                    `;
                } else {
                    messageDiv.classList.add('incoming');
                    const contactName = contactData[sender]?.name || sender;
                    messageDiv.innerHTML = `
                        <div class="message-sender">${contactName}</div>
                        <div>${text}</div>
                        <div class="message-time">${time}</div>
                    `;
                }
                
                chatMessages.appendChild(messageDiv);
                
                if (isNew) {
                    // Add to contact's message history
                    contactData[currentContact].messages.push({
                        sender: sender,
                        text: text,
                        time: time
                    });
                }
                
                scrollToBottom();
            }
            
            // Function to scroll to the bottom of the chat
            function scrollToBottom() {
                chatMessages.scrollTop = chatMessages.scrollHeight;
            }
            
            // Function to get current time in HH:MM AM/PM format
            function getCurrentTime() {
                const now = new Date();
                let hours = now.getHours();
                let minutes = now.getMinutes();
                const ampm = hours >= 12 ? 'PM' : 'AM';
                
                hours = hours % 12;
                hours = hours ? hours : 12; // 0 should be 12
                minutes = minutes < 10 ? '0' + minutes : minutes;
                
                return `${hours}:${minutes} ${ampm}`;
            }
            
            // Function to send a message
            function sendMessage() {
                const text = messageInput.value.trim();
                
                if (text === '') return;
                
                // Add user's message
                addMessageToChat('you', text, getCurrentTime());
                
                // Clear input
                messageInput.value = '';
                messageInput.focus();
                
                // Simulate a reply after a short delay
                setTimeout(() => {
                    const replies = [
                        "Thanks for your message!",
                        "Got it, I'll get back to you soon.",
                        "Interesting point. Let me think about that.",
                        "That sounds good to me.",
                        "Can you tell me more about that?",
                        "I'll check and get back to you.",
                        "Great to hear from you!",
                        "I agree with you on that."
                    ];
                    
                    const randomReply = replies[Math.floor(Math.random() * replies.length)];
                    addMessageToChat(currentContact, randomReply, getCurrentTime());
                }, 1000 + Math.random() * 2000);
            }
            
            // Event Listeners
            contacts.forEach(contact => {
                contact.addEventListener('click', function() {
                    const contactId = this.dataset.contact;
                    switchContact(contactId);
                });
            });
            
            sendButton.addEventListener('click', sendMessage);
            
            messageInput.addEventListener('keypress', function(event) {
                if (event.key === 'Enter') {
                    sendMessage();
                }
            });
            
            // Initialize with Alex's chat
            switchContact('alex');
            
            // Focus on input field
            messageInput.focus();
        });
    </script>
</body>
</html>