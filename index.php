<?php

require 'Core/bootstrap.php';
$routes = require('routes.php');

$url = Request::url();

$router = new Router;
$router->register($routes);
require $router->handle($url);
