<?php

namespace App\model;

class Router
{
    /**
     * @var Route[]
     */
    protected array $routes = [];

    public function addRoute(Route $route) : Router {
        $this->routes[] = $route;

        return $this;
    }

    public function execute(string $uri)
    {
        foreach ($this->routes as $route) {
            if ($uri === $route->getPath()) {
                $object = new ($route->getClassName())();

                $object->{$route->getMethod()}();
            }
        }
    }
}