<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Interface</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="chat-container">
        <h1>Chat with OpenAI</h1>
        <div id="chat-box" class="chat-box">
            <!-- Chat messages will be displayed here -->
        </div>
        <form id="chat-form" action="" method="POST">
            <input type="text" id="user-input" name="user-input" placeholder="Type your message..." required>
            <button type="submit">Send</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>