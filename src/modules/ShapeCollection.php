<?php

class ShapeCollection
{
    protected array $collection = [];
    protected array $bigShapeCollection = [];

    public function add(Shape $shape) : ShapeCollection
    {
        if ($shape->calcS() > 100) {
            $this->bigShapeCollection[] = $shape;

            return $this;
        }

        $this->collection[] = $shape;

        return $this;
    }
        public function getAll() : array
    {
        return $this->collection;
    }

}




