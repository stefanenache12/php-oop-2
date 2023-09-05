<?php

    require_once __DIR__.'/../utility/classespath.php';

    class Accessory extends Product{
        
        use Type;

        public function __construct($name,$price,$description,$imgProduct,$category,$type)
        {
            parent::__construct($name,$price,$description,$imgProduct,$category);
            
            $this->type = $type;
        }
    }