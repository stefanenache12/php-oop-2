<?php

    class Product {
        public string $name;
        public int $price;
        public string $description;
        public $imgProduct;

        public function __construct($name,$price,$description,$imgProduct)
        {
            $this->name = $name;
            $this->price = $price;
            $this->description = $description;
            $this->imgProduct = $imgProduct;
        }
    }