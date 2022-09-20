<?php
require 'database/Connection.php';
require 'database/QueryBuilder.php';

$pdo = Connection::start();

return new QueryBuilder($pdo);
