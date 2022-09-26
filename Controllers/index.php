<?php

$greeting = 'Hola mundo';

$tasks = App::get('database')->selectAll('tasks', 'Task');

$completedTasks = array_filter($tasks, function ($task) {
    return $task->completed;
});

$pendingTasks = array_filter($tasks, function ($task) {
    return !$task->completed;
});

require 'Views/index.view.php';
