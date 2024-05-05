<?php
require_once('controllers/Controller.php');

$routes = array(
    '/' => 'Controller@index', // pages/home.hytech
    // Anda dapat menambahkan rute lain disini.
);

// Fungsi untuk mendapatkan URL saat ini
function getCurrentUrl() {
    return isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/';
}

// Fungsi untuk mencocokkan rute
function matchRoute($routes, $url) {
    if (isset($routes[$url])) {
        return $routes[$url];
    }
    return 'NotFound@index'; // pages/404.hytech
}

// Mendapatkan URL saat ini
$currentUrl = getCurrentUrl();

// Mencocokkan rute dan memanggil controller serta method yang sesuai
list($controllerName, $methodName) = explode('@', matchRoute($routes, $currentUrl));
$controller = new $controllerName();
$controller->$methodName();
