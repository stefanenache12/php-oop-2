<?php
    
    require_once __DIR__.'/../utility/classespath.php';

    $foodForCats = [];

    $naturalDryFood = new Food(
        'Natural Trainer Gatto Sterilised Salmone',
        6.99,
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae veritatis nihil nisi blanditiis corporis modi deserunt, nemo odit deleniti ut?',
        'https://arcaplanet.vtexassets.com/arquivos/ids/248329/trainer-natural-gatto-sterilized-salmone.jpg?v=1780227416',
        'Gatti',
        1,
        'Secco'
    );

    $foodForCats[] = $naturalDryFood;

    $nextWetFood = new Food(
        'Next Cat Natural Tonnetto Pesce Bianco',
        12.50,
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae veritatis nihil nisi blanditiis corporis modi deserunt, nemo odit deleniti ut?',
        'https://arcaplanet.vtexassets.com/arquivos/ids/207881/Multipack-gatto-Next-Natural-Tonnetto-Pesce-Bianco-6x50g.jpg?v=1780228543',
        'Gatti',
        1,
        'Umido'
    );

    $foodForCats[] = $nextWetFood;

    $ultimaDryFood = new Food (
        'Ultima Cat Sterilized Salmone',
        7.99,
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae veritatis nihil nisi blanditiis corporis modi',
        'https://arcaplanet.vtexassets.com/arquivos/ids/261367/salmone.jpg?v=1780239229',
        'Gatti',
        3,
        'Secco'
    );

    $foodForCats[] = $ultimaDryFood;