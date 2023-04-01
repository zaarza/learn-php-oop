<?php
/*  Property: variable in a class
    Method: function in a class
*/

class Product {
    public $name = "Product Name";
    public $description = "Lorem ipsum dolor sit amet";
    public $brand = "Mybrand";

    public function getLabel() {
        return "$this->name, $this->description";
    }
};


$product1 = new Product();
$product1->name = "Mineral Water";
$product1->description = "Fresh water from nature";
$product1->brand = "AQUA";

var_dump($product1);

var_dump($product1->getLabel());