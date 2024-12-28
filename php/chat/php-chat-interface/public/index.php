<?php
require_once '../src/index.php';

// Initialize the application
$app = new Application();

// Route requests to the appropriate controller
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $app->getController()->handleChat($_POST['message']);
} else {
    $app->getView()->render();
}
?>