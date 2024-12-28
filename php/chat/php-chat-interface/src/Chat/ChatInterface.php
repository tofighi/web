<?php

interface ChatInterface {
    public function startChat();
    public function sendMessage($message);
    public function getResponse();
}