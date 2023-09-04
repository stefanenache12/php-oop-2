<?php
    require_once __DIR__.'/../utility/classespath.php';
    require_once __DIR__.'/../database/foodForDogs.php';
    require_once __DIR__.'/../database/foodForCats.php';
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

        <header class="p-5">
            <h1>
                AnimalsParadise..Food..Games...and more !
            </h1>
        </header>

        <main>
            <div class="container text-center">
                <h2 class="text-start pt-5 pb-5">Cibo per Cani</h2>
                <div class="row">
                    <?php
                        foreach ($foodForDogs as $product) {
                            echo '<div class="col p-3">';
                            echo '<img src="' . $product->imgProduct . '" alt="' . $product->name . '"><br><br>';
                            echo "<h4>".$product->name."</h4>";
                            echo "<h5>"."$" . $product->price."</h5>";
                            echo "<p>".$product->description."<p>" ;
                            echo "<h6>"."Cibo per " . $product->categoryName."</h6>";
                            echo "<h6>"."Peso in Kg: " . $product->weight."</h6>";
                            echo "<h6>"."Cibo " . $product->type."</h6>";
                            echo '</div>'; 
                        }
                    ?>
                </div>
                <h2 class="text-start pt-5 pb-5">Cibo per Gatti</h2>
                <div class="row">
                    <?php
                        foreach ($foodForCats as $product) {
                            echo '<div class="col p-3">';
                            echo '<img src="' . $product->imgProduct . '" alt="' . $product->name . '"><br><br>';
                            echo "<h4>".$product->name."</h4>";
                            echo "<h5>"."$" . $product->price."</h5>";
                            echo "<p>".$product->description."<p>" ;
                            echo "<h6>"."Cibo per " . $product->categoryName."</h6>";
                            echo "<h6>"."Peso in Kg: " . $product->weight."</h6>";
                            echo "<h6>"."Cibo " . $product->type."</h6>";
                            echo '</div>'; 
                        }
                    ?>
                </div>
            </div> 
        </main>
    </body>
</html>