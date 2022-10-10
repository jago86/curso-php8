<?php

require "vendor/autoload.php";
require 'Core/bootstrap.php';

use Core\App;
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$db = App::get('config')['database'];

$capsule->addConnection([
    'driver' => $db['type'],
    'host' => $db['host'],
    'database' => $db['database'],
    'username' => $db['user'],
    'password' => $db['password'],
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

$routes = require('routes.php');
