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

            if(!is_numeric($price) || $price < 0){
                throw new Exception('Il prezzo non è valido');
                $this->price = "Prezzo non disponibile!";
            }else {
                $this->price = $price;
            }
        }

    }