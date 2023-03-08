<?php

echo renderHtml("menu");

echo "</br></br> Наши упражнения: </br></br>";

include __DIR__ . "/../modules/Shape.php";
include __DIR__ . "/../modules/Rectangle.php";
include __DIR__ . "/../modules/Circle.php";

$rectangle = new Rectangle();
$rectangle->setWidth(5.5);
$rectangle->setHeight(3.2);
echo $rectangle->calcS();

echo "</br>";

$circle = new Circle();
$circle->setRadius(1);
echo $circle->calcS();

/**
* @param Shape[] $shapes
* @return void
*/
function calcArea(array $shapes) {
    foreach ($shapes as $shape) {
    echo $shape->getColor();
    echo "</br>";
    }
}

$shapes = [
(new Rectangle())->setHeight(3)->setWidth(3.2),
(new Rectangle())->setHeight(5)->setWidth(2.9),
(new Circle())->setRadius(10),
(new Circle())->setRadius(2.2),
];

calcArea($shapes);