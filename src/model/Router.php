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
//          if ($uri === $route->getPath()) {
            if(preg_match("~" . $route->getPath() . "~", $uri, $matches)) {
                $object = new ($route->getClassName())();
                unset($matches[0]);
                call_user_func_array([$object, $route->getMethod()], $matches);
//                $object->{$route->getMethod()}();

                exit();

            }
        }
    }
}