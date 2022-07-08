<?php

$request = $_SERVER['REQUEST_URI'];
$url = explode('/', $_SERVER['REQUEST_URI']);
switch ($url[2]) {
    case '' :
        require __DIR__ . '/home.html';
        break;
    case 'peinture' :
        require __DIR__ . '/peinture.html';
        break;
    case 'tattoo' :
        require __DIR__ . '/tattoo.html';
        break;
    case 'graphisme' :
        require __DIR__ . '/graphisme.html';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/404.html';
        break;
}