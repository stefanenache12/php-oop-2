<?php
    
    require_once __DIR__.'/../utility/classespath.php';

    $food = [];
    $games = [];
    $accesories = [];


    $mongeDryFood = new Food(
        'Monge All Breeds Adult Salmone e Riso',
        49,
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae veritatis nihil nisi blanditiis corporis modi deserunt, nemo odit deleniti ut?',
        'https://arcaplanet.vtexassets.com/arquivos/ids/270797/Monge-All-Breeds-Adult-Salmone-e-Riso-12Kg.jpg?v=1780236261',
        'Cani',
        12,
        'Secco'
    );

    $food[] = $mongeDryFood;