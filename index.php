<?php
session_start();

define('BASE_URL', '/mvc_projet');

$controller = $_GET['page'] ?? 'home';
$action     = $_GET['action'] ?? 'index';

$controllerFile = "controller/{$controller}Controller.php";

if (file_exists($controllerFile)) {
    require_once $controllerFile;
    $function = $action . '_action';

    if (function_exists($function)) {
        $function();
    } else {
        http_response_code(404);
        echo "Erreur : action '$action' introuvable.";
    }
} else {
    http_response_code(404);
    echo "Erreur : page '$controller' introuvable.";
}