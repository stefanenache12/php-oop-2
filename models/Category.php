<?php
    class Category  {
        public $categoryName;
        public $icon;

        public function __construct($categoryName,$icon)
        {
            
            $this->categoryName = $categoryName;
            $this->icon = $icon;
        }
    }

    $dogCategory = new Category(
        'Cani',
        '<i class="fa-solid fa-dog"></i>'
    );

    $catCategory = new Category(
        'Gatti',
        '<i class="fa-solid fa-cat"></i>'
    );