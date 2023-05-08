<?php

require_once __DIR__ . '/Product.php';

class Toys extends Product {
    public $material;

    public function __construct($name, $price, $category, $image, $material)
    {
        parent::__construct($name, $price, $category, $image);
        $this->material = $material;
    }
}