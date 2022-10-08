<?php

use Artack\Color\Factory;
use Artack\Color\Color\HSV;
use Artack\Color\Color\RGB;
require "vendor/autoload.php";
require 'Core/bootstrap.php';

$converter = Factory::createConverter();
$RGB = new RGB(101, 45, 204);

$HSV = $converter->convert($RGB, HSV:: class);

echo $HSV->getHue() .", " . $HSV->getSaturation(). ", " . $HSV->getValue();

// use PhpUnitsOfMeasure\PhysicalQuantity\Length;

// $height = new Length(1, 'km');
// echo $height->toUnit('m');

// $routes = require('routes.php');

// use Core\Request;
// use Core\Router;

// $url = Request::url();

// $router = new Router;
// $router->register($routes);
// $router->handle($url);
