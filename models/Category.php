<?php
    
    require_once __DIR__.'/Product.php';

    class Category extends Product {
        public $categoryName;

        public function __construct($name,$price,$description,$imgProduct,$categoryName)
        {
            parent::__construct($name,$price,$description,$imgProduct);
            
            $this->categoryName = $categoryName;
        }
    }