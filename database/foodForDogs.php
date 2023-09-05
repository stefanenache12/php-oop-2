<?php
    
    require_once __DIR__.'/../utility/classespath.php';

    $foodForDogs = [];

try {

    $mongeDryFood = new Food(
        'Monge All Breeds Adult Salmone e Riso',
        -49.99,
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae veritatis nihil nisi blanditiis corporis modi deserunt, nemo odit deleniti ut?',
        'https://arcaplanet.vtexassets.com/arquivos/ids/270797/Monge-All-Breeds-Adult-Salmone-e-Riso-12Kg.jpg?v=1780236261',
        $dogCategory,
        12,
        'Secco'
    );
}
catch(Exception $error){
    echo 'Exception: '. $error->getMessage();
};

    $foodForDogs[] = $mongeDryFood;

    $stuzzyWetFood = new Food (
        'Stuzzy Dog Monoproteico Lattina',
        4.30,
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae veritatis nihil nisi blanditiis corporis modi',
        'https://arcaplanet.vtexassets.com/arquivos/ids/257857/stuzzy-monoprotein-agnello-.jpg?v=1780239079',
        $dogCategory,
        1,
        'Umido'
    );

    $foodForDogs[] = $stuzzyWetFood;

    $acanaDryFood = new Food (
        'Acana Pacifica',
        24.5,
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae veritatis nihil nisi blanditiis corporis modi',
        'https://arcaplanet.vtexassets.com/arquivos/ids/268978/acana-pacifica-recipe.jpg?v=1780237352',
        $dogCategory,
        12,
        'Secco'
    );

    $foodForDogs[] = $acanaDryFood;
