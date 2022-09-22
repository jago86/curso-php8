<?php

$query->update('tasks', $_POST['id'], [
    'completed' => $_POST['completed'],
]);

header('Location: /');
