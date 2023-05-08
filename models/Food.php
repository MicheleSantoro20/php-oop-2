<?php

require_once __DIR__ . '/Product.php';

class Food extends Product {
    
    public $flavor;
    public $brand;

    public function __construct($name, $price, $category, $image, $flavor, $brand)
    {
        parent::__construct($name,$price,$category, $image);
        $this->flavor = $flavor;
        $this->brand = $brand;
    }

    

}