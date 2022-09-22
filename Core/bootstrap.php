<?php
$config = require 'config.php';
if ($config['error_handling']) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'Core/Router.php';
require 'Core/Request.php';
require 'Models/Task.php';
require 'functions.php';

$pdo = Connection::start($config['database']);

return new QueryBuilder($pdo);
