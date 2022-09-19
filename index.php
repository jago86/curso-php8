<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'functions.php';
require 'Models/Task.php';
require 'Enums/ColorsEnum.php';

$greeting = 'Hola mundo';

$tasks = [
    new Task('Estudiar PHP'),
    new Task('Ir al supermercado'),
    new Task('Hacer ejercicio', true),
];

$tasks[0]->setColor(ColorsEnum::BLUE->value);
$tasks[1]->setColor(ColorsEnum::GREEN->value);
$tasks[2]->setColor(ColorsEnum::RED->value);

$completedTasks = array_filter($tasks, function ($task) {
    return $task->completed;
});

$pendingTasks = array_filter($tasks, function ($task) {
    return !$task->completed;
});

require 'index.view.php';
