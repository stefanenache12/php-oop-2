<?php

    require_once __DIR__.'/../utility/classespath.php';

    class Food extends Product{
        public int $weight;
        use Type;

        public function __construct($name,$price,$description,$imgProduct,$category,$weight,$type)
        {
            parent::__construct($name,$price,$description,$imgProduct,$category);
            
            $this->weight = $weight;
            $this->type = $type;
        }
    }