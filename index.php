<?php

require_once 'router/routeur.php';

// Création d'une nouvelle instance de la classe make
$router = new router\make\make();

// Obtenir l'URL demandée
$url = $router->setUrl();

// inclusion du fichier qui contient toutes les routes du site
require_once "router/routes.php";

if (isset($routes[$url])) {
    $router->route($routes[$url]);
} else {
    $router->route('pages/error');
}
