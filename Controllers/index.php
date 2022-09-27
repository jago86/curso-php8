<?php

$greeting = 'Hola mundo';

$tasks = Task::all();

$completedTasks = array_filter($tasks, function ($task) {
    return $task->properties->completed;
});

$pendingTasks = array_filter($tasks, function ($task) {
    return !$task->properties->completed;
});

require 'Views/index.view.php';
