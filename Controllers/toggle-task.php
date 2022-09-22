<?php
require 'functions.php';
$query = require 'bootstrap.php';

$query->update('tasks', $_POST['id'], [
    'completed' => $_POST['completed'],
]);

header('Location: index.php');
