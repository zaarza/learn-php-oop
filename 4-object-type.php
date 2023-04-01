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

class Printer {
    public function PrintData( Product $product ) {
        $data = "Name: $product->name, Description: $product->description, Brand: $product->brand";
        return $data;
    }
}

$product1 = new Product("Mineral Water", "Fresh water from nature", "AQUA");
$product2 = new Product("Wooden Chair");

$ProductInfo = new Printer();
var_dump($ProductInfo->PrintData($product1));