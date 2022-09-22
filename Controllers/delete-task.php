<?php
require 'functions.php';
$query = require 'bootstrap.php';

$query->delete('tasks', $_POST['id']);

header('Location: index.php');
