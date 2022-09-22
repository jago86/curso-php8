<?php

$greeting = 'Hola mundo';

$tasks = $query->selectAll('tasks', 'Task');

$completedTasks = array_filter($tasks, function ($task) {
    return $task->completed;
});

$pendingTasks = array_filter($tasks, function ($task) {
    return !$task->completed;
});

require 'Views/index.view.php';
