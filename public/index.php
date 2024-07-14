<?php

require '../helpers.php';

// inspect($uri);
// inspect($method);
// string(26) "/workopia/public/index.php"
// string(3) "GET"

require basePath('Router.php');

$router = new Router();

$routes = require basePath('routes.php');

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);