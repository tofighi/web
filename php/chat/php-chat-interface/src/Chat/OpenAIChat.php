<?php

namespace Chat;

use GuzzleHttp\Client;

class OpenAIChat implements ChatInterface
{
    private $client;
    private $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
        $this->client = new Client();
    }

    public function sendMessage($message)
    {
        $response = $this->client->post('https://api.openai.com/v1/chat/completions', [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    ['role' => 'user', 'content' => $message],
                ],
            ],
        ]);

        $body = json_decode($response->getBody(), true);
        return $body['choices'][0]['message']['content'] ?? 'No response from API';
    }

    public function startChat()
    {
        return "Chat session started. How can I assist you today?";
    }
}