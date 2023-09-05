<?php
    
    require_once __DIR__.'/../utility/classespath.php';
    class Product {
        public string $name;
        public $price;
        public string $description;
        public $imgProduct;
        public $category;

        public function __construct($name,$price,$description,$imgProduct,$category)
        {
            $this->name = $name;
            $this->price = $price;
            $this->description = $description;
            $this->imgProduct = $imgProduct;
            $this->category = $category;
        }
    }