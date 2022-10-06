<?php

namespace Core;

class App
{
    protected static $dependencies = [];

    public static function set($key, $value)
    {
        static::$dependencies[$key] = $value;
    }

    public static function get($key)
    {
        return static::$dependencies[$key];
    }
}
