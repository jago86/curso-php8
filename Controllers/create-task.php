<?php

Task::create([
    'title' => $_POST['title'],
    'color' => $_POST['color'],
    'completed' => 0,
]);

header('Location: /');
