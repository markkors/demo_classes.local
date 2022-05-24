<?php

require('includes/functions.php');
require('includes/autoloader.php');


$request = $_SERVER['REQUEST_URI'];
$url = parse_url($request);

// my router
switch ($url["path"]) {
    case '/':
        // require __DIR__ . '/views/main.php';
        require __DIR__ . '/view/index.php';
        break;
    case '/api/get':
        require __DIR__ . '/api/get.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/view/404.php';
        break;
}