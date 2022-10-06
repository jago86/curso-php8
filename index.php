<?php
require "vendor/autoload.php";
require 'Core/bootstrap.php';
$routes = require('routes.php');

use Core\Request;
use Core\Router;

$url = Request::url();

$router = new Router;
$router->register($routes);
$router->handle($url);
