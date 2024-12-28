<?php

namespace App\Controllers;

use App\Chat\OpenAIChat;

class ChatController
{
    protected $chat;

    public function __construct()
    {
        $this->chat = new OpenAIChat();
    }

    public function handleChat($userInput)
    {
        $response = $this->chat->sendMessage($userInput);
        return $response;
    }
}