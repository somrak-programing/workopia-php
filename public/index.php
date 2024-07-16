<?php

require '../helpers.php';

require basePath('Router.php');
require basePath('Database.php');


// inspect($uri);
// inspect($method);
// string(26) "/workopia/public/index.php"
// string(3) "GET"

// Instatiating the router
$router = new Router();

// Get routes
$routes = require basePath('routes.php');

// Get current URI and GTTP method
$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

//Route the requrest
$router->route($uri, $method);