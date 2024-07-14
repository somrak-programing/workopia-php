<?php

// return [
//     '/workopia/public/index.php' => 'controllers/home.php',
//     '/workopia/public/index.php/listings' => 'controllers/listings/index.php',
//     '/listings/create' => 'controllers/listings/create.php',
//     '404' => 'controllers/error/404.php'
// ];

$router->get('/workopia/public/index.php', 'controllers/home.php');
$router->get('/workopia/public/index.php/listings', 'controllers/listings/index.php');
$router->get('/listings/create', 'controllers/listings/create.php');