<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
session_start();
ob_start();

define('DS', DIRECTORY_SEPARATOR);
define('WWW_ROOT', __DIR__ . DS);

$routes = array(
    'home' => array(
        'controller' => 'Todos',
        'action' => 'overview'
    ),
    'delete-todo' => array(
        'controller' => 'Todos',
        'action' => 'delete'
    )
);

if(empty($_GET['page'])) {
    $_GET['page'] = 'home';
}

//TODO: CONTROLEER OF WE AL DAN NIET INGELOGD ZIJN EN REDIRECT INDIEN NODIG

if(empty($routes[$_GET['page']])) {
    header('Location: index.php');
    exit();
}

// if(empty($_SESSION["user"]) && $_GET["page"]!= "login-register"){
//     header("Location:index.php?page=login-register");
//     exit();
// }

$route = $routes[$_GET['page']];
$controllerName = $route['controller'] . 'Controller';

require_once WWW_ROOT . 'controller' . DS . $controllerName . ".php";

$controllerObj = new $controllerName();
$controllerObj->route = $route;
$controllerObj->filter();
$controllerObj->render();
