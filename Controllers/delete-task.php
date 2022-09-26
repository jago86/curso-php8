<?php

App::get('database')->delete('tasks', $_POST['id']);

header('Location: /');
