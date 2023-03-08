<?php


class Rectangle extends Shape
{
    private float $width;
    private float $height;

    public function getColor()
    {
        return "black";
    }

    public function calcS()
    {
        return $this->width * $this->height;
    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * @param float $width
     * @return Rectangle
     */
    public function setWidth(float $width): Rectangle
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @param float $height
     * @return Rectangle
     */
    public function setHeight(float $height): Rectangle
    {
        $this->height = $height;
        return $this;
    }

}