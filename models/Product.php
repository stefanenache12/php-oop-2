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
            
            if(is_numeric($price) && $price > 0){
                $this->price = $price;
            }else{
                throw new Exception('Il prezzo non è valido');
            }

            $this->description = $description;
            $this->imgProduct = $imgProduct;
            $this->category = $category;
        }

    }