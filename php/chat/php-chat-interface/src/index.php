<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Controllers\ChatController;

session_start();

$chatController = new ChatController();
$chatController->handleChat();
?>