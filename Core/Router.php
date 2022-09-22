<?php

class Router
{
    protected $routes = [];

    public function register($routes)
    {
        $this->routes = $routes;
    }

    public function handle($url)
    {
        if (array_key_exists($url, $this->routes)) {
            return $this->routes[$url];
        }

        die('La ruta no existe.');
    }

}
