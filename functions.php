<?php

function dd($value)
{
    return die(var_dump($value));
}

function view($path, $params = [])
{
    extract($params);

    require "Views/{$path}.view.php";
}

function redirect($path)
{
    header("Location: {$path}");
}
