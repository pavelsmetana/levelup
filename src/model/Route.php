<?php

namespace App\model;

class Route
{

    protected string $path;
    protected string $className;
    protected string $method;


    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @return string
     */
    public function getClassName(): string
    {
        return $this->className;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    public function __construct($path, $className, $method)
    {
        $this->path = $path;
        $this->className = $className;
        $this->method = $method;

        return $this;
    }


}