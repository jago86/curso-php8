<?php

$task = Task::find($_POST['id']);
$task->delete();

header('Location: /');
