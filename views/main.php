<?php
require_once "../public/data/shoes.php";


?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/style.css">
    <title>Chaussures_LHP8</title>
</head>

<body>
<div class="container-fluid backgroundImg">
        <div class="row p-0">
            <nav class="navbar navbar-expand-lg col-lg-7 text-light">
                <div class="container-fluid">
                    <a class="nav-link" href="#"></a>
                    <a class="nav-link" href="#">OÙ ET QUAND PARTIR</a>
                    <a class="nav-link" aria-current="page" href="#">CULTURE & VOYAGE</a>
                    <a class="nav-link" href="#">QUI SOMMES-NOUS</a>
                </div>
            </nav>
        </div>
        <h1 class="text-center text-light my-5">Luxe & prestige Polynésie Française</h1>
        <div class="justify-content-center text-center">
            <img src="assets/img/tampon.png" class="my-2" alt="tampon">
        </div>
        <nav class="navbar bg-secondary my-2">
            <a class="nav-link text-light mx-4">Selon vos envies</a>
            <a class="nav-link text-light">Villes/Régions</a>
            <a href="#" class="btn button text-light mx-4">Demander un devis</a>
        </nav>
    </div>
    <div class="row p-0 m-0">
        <?php foreach ($array as $value) { ?>

            <div class="col-lg-3">
                <div class="text-center border border-secondary rounded shadow m-2">
                    <img class="card-img-top imgSize" src="/public/img/<?= $value["picture"] ?>.webp" alt="<?= $value["picture"] ?>">
                    <div class="card-body bg-info text-center">
                        <h2 class="card-title text-light"><?= $value["brand"] ?></h2>
                        <p class="card-text text-light fs-5"><u><?= $value["name"] ?></u></p>
                        <span class="card-text text-start text-light"> Taille : <?= $value["size"] ?></span>
                        <span class="card-text text-center text-light">Prix : <?= $value["price"] ?>€</span>
                        <div>
                            <a href="#" class="btn btn-danger my-3">Acheter</a>
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>
    </div>

</body>

</html>