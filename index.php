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
        require __DIR__ . '/controllers/backoffice_mur.php';
        break;
    case 'backofficeOeuvre' :
        require __DIR__ . '/controllers/backoffice_oeuvre.php';
        break;
    case 'backofficeExpo' :
        require __DIR__ . '/controllers/backoffice_expo.php';
        break;
    case 'backofficeWorkshop' :
        require __DIR__ . '/controllers/backoffice_workshop.php';
        break;
    case 'backofficeExpo' :
        require __DIR__ . '/controllers/backoffice_expo.php';
        break;
    case 'backofficeTattoo' :
        require __DIR__ . '/controllers/backoffice_tattoo.php';
        break;
    case 'backofficeFlash' :
        require __DIR__ . '/controllers/backoffice_flash.php';
        break;
    case 'backofficeDirArt' :
        require __DIR__ . '/controllers/backoffice_dirArt.php';
        break;
    case 'backofficeIdVisu' :
        require __DIR__ . '/controllers/backoffice_idVisu.php';
        break;
    case 'backofficePrint' :
        require __DIR__ . '/controllers/backoffice_print.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.html';
        break;
}