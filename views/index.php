<?php
    require_once __DIR__.'/../utility/classespath.php';
    require_once __DIR__.'/../database/db.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="../style/style.css">
        <title>OOP</title>
    </head>
    <body>
        <?php
            echo '<div class="container text-center">';
            echo '<div class="row">';
            foreach ($food as $product) {
                echo '<div class="col-2">';
                echo '<img src="' . $product->imgProduct . '" alt="' . $product->name . '"><br><br>';
                echo $product->name . "<br>";
                echo "$" . $product->price . "<br>";
                echo $product->description . "<br>";
                echo "Cibo per " . $product->categoryName . "<br>";
                echo "Peso in Kg: " . $product->weight . "<br>";
                echo "Cibo " . $product->type . "<br>";
                echo '</div>'; 
            }
            echo '</div>'; 
            echo '</div>'; 
        ?>
    </body>
</html>