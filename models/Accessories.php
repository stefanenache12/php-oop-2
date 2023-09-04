<?php

    require_once __DIR__.'/../utility/classespath.php';

    class Accessory extends Category{
        
        public $type;

        public function __construct($name,$price,$description,$imgProduct,$categoryName,$type)
        {
            parent::__construct($name,$price,$description,$imgProduct,$categoryName);
            
            $this->type = $type;
        }
    }