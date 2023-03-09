<?php

class Product
{
    protected float $price;

    public function getPrice()
    {
        return $this->price;
    }

    public function __construct(float $price)
    {
        $this->price = $price;
    }
}