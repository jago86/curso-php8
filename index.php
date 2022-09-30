<?php
require "vendor/autoload.php";
require 'Core/bootstrap.php';
$routes = require('routes.php');

$url = Request::url();

$router = new Router;
$router->register($routes);
$router->handle($url);
