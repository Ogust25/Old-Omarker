<?php

$request = $_SERVER['REQUEST_URI'];
$url = explode('/', $_SERVER['REQUEST_URI']);
switch ($url[2]) {
    case '' :
        require __DIR__ . '/controllers/home.php';
        break;
    case 'peinture' :
        require __DIR__ . '/controllers/peinture.php';
        break;
    case 'tattoo' :
        require __DIR__ . '/controllers/tattoo.php';
        break;
    case 'graphisme' :
        require __DIR__ . '/controllers/graphisme.php';
        break;
    case 'backoffice' :
        require __DIR__ . '/views/backoffice/home.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.html';
        break;
}