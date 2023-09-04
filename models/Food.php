<?php

    require_once __DIR__.'/../utility/classespath.php';

    class Food extends Category{
        public int $weight;
        public $type;

        public function __construct($name,$price,$description,$imgProduct,$categoryName,$weight,$type)
        {
            parent::__construct($name,$price,$description,$imgProduct,$categoryName);
            
            $this->weight = $weight;
            $this->type = $type;
        }
    }