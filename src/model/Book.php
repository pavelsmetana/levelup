<?php

namespace App\model;

class Book
{
    public string $author;
    public string $name;

    public function __construct($name, $author)
    {
        $this->name = $name;
        $this->author = $author;
    }
}