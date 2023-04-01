<?php
/*  A special method in a class that run after an instance from class created
*/

class Product {
    public function __construct( $name = "Product name", $description = "Product description", $brand = "Mybrand" ) {
        $this->name = $name;
        $this->description = $description;
        $this->brand = $brand;
    }
    
    public $name, $description, $brand;

    public function getLabel() {
        return "$this->name, $this->description";
    }
};

$product1 = new Product("Mineral Water", "Fresh water from nature", "AQUA");
$product2 = new Product("Wooden Chair");

var_dump($product1);
var_dump($product1->getLabel());

echo "<br>";
echo "<br>";

var_dump($product2);
var_dump($product1->getLabel());