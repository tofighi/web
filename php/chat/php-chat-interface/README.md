# PHP Chat Interface

This project implements a chat interface similar to ChatGPT, integrating with the OpenAI API for back-and-forth communication.

## Project Structure

```
php-chat-interface
├── src
│   ├── index.php
│   ├── Chat
│   │   ├── ChatInterface.php
│   │   └── OpenAIChat.php
│   ├── Controllers
│   │   └── ChatController.php
│   ├── Views
│       └── chat.php
├── public
│   └── index.php
├── composer.json
└── README.md
```

## Installation

1. Clone the repository:
   ```
   git clone <repository-url>
   ```

2. Navigate to the project directory:
   ```
   cd php-chat-interface
   ```

3. Install dependencies using Composer:
   ```
   composer install
   ```

## Usage

1. Set up your OpenAI API key in the environment variables or directly in the `OpenAIChat.php` file.
2. Start a local server:
   ```
   php -S localhost:8000 -t public
   ```

3. Open your browser and go to `http://localhost:8000` to access the chat interface.

## Contributing

Feel free to submit issues or pull requests for improvements or bug fixes.

## License

This project is licensed under the MIT License.