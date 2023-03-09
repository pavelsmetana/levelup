<?php

echo renderHtml("menu");

echo "</br></br> Наши упражнения: </br></br>";
//
//include __DIR__ . "/../modules/Shape.php";
//include __DIR__ . "/../modules/Rectangle.php";
//include __DIR__ . "/../modules/Circle.php";
//include __DIR__ . "/../modules/ShapeCollection.php";
//
//$rectangle = new Rectangle();
//$rectangle->setWidth(5.5);
//$rectangle->setHeight(3.2);
//echo $rectangle->calcS();
//
//echo "</br>";
//
//$circle = new Circle();
//$circle->setRadius(1);
//echo $circle->calcS();

///**
//* @param Shape[] $shapes
//* @return void
//*/
//function calcArea(ShapeCollection $shapeCollection) {
//    foreach ($shapeCollection->getAll() as $shape) {
//    echo $shape->getColor();
//    echo "</br>";
//    }
//}
//
//$shapes = [
//(new Rectangle(3, 3.2),
//(new Rectangle(2, 7),
//(new Circle())->setRadius(10),
//(new Circle())->setRadius(2.2),
//];
//
//
//$shapeCollection = new ShapeCollection();
//$shapeCollection
//    ->add((new Rectangle())->setWidth(1)->setHeight(5.5))
//    ->add((new Rectangle())->setWidth(12)->setHeight(11))
//    ->add((new Rectangle())->setWidth(3.1)->setHeight(2.1))
//    ->add((new Circle())->setRadius(3))
//
//;
//
//    calcArea($shapeCollection);


include __DIR__ . "/../modules/Product.php";
include __DIR__ . "/../modules/Table.php";
include __DIR__ . "/../modules/Chair.php";
include __DIR__ . "/../modules/Plug.php";


/**
 * @var Product[] $products
 */
$products = [
    new Plug(24),
    new Plug(26),
    new Chair(45),
    new Chair(60),
    new Table(120),
    new Table(300),

];

$sumPrice = 0;

foreach ($products as $product) {
    $sumPrice+=$product->getPrice();

}

echo $sumPrice;