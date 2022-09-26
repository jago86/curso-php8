<?php

App::get('database')->update('tasks', $_POST['id'], [
    'completed' => $_POST['completed'],
]);

header('Location: /');
