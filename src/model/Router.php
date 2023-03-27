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
        try {
            foreach ($this->routes as $route) {
                if(preg_match("~" . $route->getPath() . "~", $uri, $matches)) {
                    $object = new ($route->getClassName())();
                    unset($matches[0]);
                    call_user_func_array([$object, $route->getMethod()], $matches);
                    exit();
                }
            }
        } catch (\Throwable $e){
            echo $e->getMessage();
            exit();
        }
    }
}