<?php

// Require the necessary files
require_once __DIR__ . '/route.php';
require_once __DIR__ . '/controller/PageController.php';

try {
    // Create a new instance of the PageController
    $pageController = new PageController();

    // Determine the route and call the corresponding method on the controller
    if (matchRoute('/', $_SERVER['REQUEST_URI'])) {
        $pageController->index();
    } elseif (matchRoute('/folder1', $_SERVER['REQUEST_URI'])) {
        $pageController->folder1();
    } elseif (matchRoute('/folder2', $_SERVER['REQUEST_URI'])) {
        $pageController->folder2();
    } else {
        http_response_code(404);
        echo '404 Not Found';
    }
} catch (Exception $e) {
    // Handle any exceptions that occur during execution
    http_response_code(500);
    echo 'An error occurred: ' . $e->getMessage();
}