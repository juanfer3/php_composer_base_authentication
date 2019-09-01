<?php
/*
use App\controllers\Authentication;

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );


// all of our endpoints start with /person
// everything else results in a 404 Not Found
if ($uri[1] !== 'person') {
    header("HTTP/1.1 404 Not Found");
    exit();
}

$requestMethod = $_SERVER["REQUEST_METHOD"];


// the user id is, of course, optional and must be a number:
$id = null;
if (isset($uri[2])) {
    $id = (int) $uri[2];
}

$controller = new Authentication($requestMethod, $id);
$controller->processRequest();
/* */


use App\controllers\Authentication;
$request        = $_SERVER['REQUEST_URI'];
$requestMethod  = $_SERVER["REQUEST_METHOD"];


switch ($request) {
    case '/' :
        echo '/api';
        break;
    case '/api/login' :
        if($requestMethod == 'POST'){
            return Authentication::login();
        }
        break;
    case '/api/signup' :
        if($requestMethod == 'POST'){
            return Authentication::signup();
        }
        break;
    case '/about' :
        require __DIR__ . '/views/about.php';
        break;
    default:
        return '404';
        break;
}
/* */