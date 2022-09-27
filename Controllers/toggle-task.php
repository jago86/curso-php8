<?php

$task = Task::find($_POST['id']);

$task->update([
    'completed' => $_POST['completed'],
]);

header('Location: /');
