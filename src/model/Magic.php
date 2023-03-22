<?php

namespace App\model;

class Magic
{
    private array $data;

    public function __construct()
    {
        $this->data = ["test"=>1, "test2"=>2, "test3"=>["test"=>1, "test2"=>2, "test3"=>3]];
    }

    public function __get(string $name)
    {
        $x = 0;
        return $this->data[$name];
    }

    public function __set(string $name, mixed $value)
    {
        $this->data[$name] = $value;
    }

    public function __toString(): string
    {
        return json_encode($this->data);
    }
}