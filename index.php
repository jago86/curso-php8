<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'functions.php';
require 'Models/Task.php';
require 'Enums/ColorsEnum.php';

$greeting = 'Hola mundo';

$pdo = dbConnect();

$tasks = getAllTasks($pdo);

$completedTasks = array_filter($tasks, function ($task) {
    return $task->completed;
});

$pendingTasks = array_filter($tasks, function ($task) {
    return !$task->completed;
});

require 'index.view.php';
