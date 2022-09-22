<?php

$query->delete('tasks', $_POST['id']);

header('Location: /');
