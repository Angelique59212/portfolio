<?php



require_once '../vendor/autoload.php';
require '../Router.php';

session_start();

try {
    Router::route();
}

catch (ReflectionException $e) {
    echo "La connexion a échoué";
}
