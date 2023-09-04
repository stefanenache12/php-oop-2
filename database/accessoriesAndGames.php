<?php
    
    require_once __DIR__.'/../utility/classespath.php';

    $accesoriesAndGames = [];

    $giraffeGame = new Game(
        'Gioco Giraffa Collo Lungo',
        9.99,
        'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus ex iusto illum corporis? Esse, ipsum',
        'https://arcaplanet.vtexassets.com/arquivos/ids/273066/luna-e-teo-gioco-cane-giraffa-collo-lungo.jpg?v=1778191357',
        'Cani  <i class="fa-solid fa-dog"></i>',
        'Peluches',
    );

    $accesoriesAndGames[] = $giraffeGame;

    $ballCatGame = new Game(
        'Gioco con Pallina per Gatto',
        12.5,
        'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus ex iusto illum corporis? Esse, ipsum',
        'https://arcaplanet.vtexassets.com/arquivos/ids/266265/yes-gioco-con-pallina-per-gatti.jpg?v=1780239477',
        'Gatti <i class="fa-solid fa-cat"></i>',
        'Inteligenza'
    );

    $accesoriesAndGames[] = $ballCatGame;

    $catBowl = new Accessory(
        'Ciotola in Ceramica Grigia',
        4.5,
        'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus ex iusto illum corporis? Esse, ipsum',
        'https://arcaplanet.vtexassets.com/arquivos/ids/266458/trixie-ciotola-ceramica-grigio-250ml.jpg?v=1780228045',
        'Gatti <i class="fa-solid fa-cat"></i>',
        'Ciotola'
    );

    $accesoriesAndGames[] = $catBowl;