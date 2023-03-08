<?php

class Circle extends Shape
{
    private float $radius;

    public function calcS()
    {
        return $this->radius * pi() * $this->radius;
    }

    /**
     * @return float
     */
    public function getRadius(): float
    {
        return $this->radius;
    }

    /**
     * @param float $radius
     * @return Circle
     */
    public function setRadius(float $radius): Circle
    {
        $this->radius = $radius;
        return $this;
    }

}