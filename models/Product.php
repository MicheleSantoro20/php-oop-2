<?php

require_once __DIR__ . '/Category.php';

class Product {


    public $name;
    public $description;
    public $price;
    public $weight;
    public $category;
    public $image;

    public function __construct($name, $price, $category, $image){
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->image = $image;
    }


    public function getProduct() {
        return "Nome: $this->name, Prezzo: $this->price";
    }

    public function getType() {
        get_class(); 
    }
}