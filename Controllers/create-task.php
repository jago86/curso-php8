<?php
require 'functions.php';
$query = require 'bootstrap.php';

$query->create('tasks', [
    'title' => $_POST['title'],
    'color' => $_POST['color'],
    'completed' => 0,
]);

header('Location: index.php');
