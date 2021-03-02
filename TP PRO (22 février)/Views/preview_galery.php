<?php
require "../Controllers/preview_galery_controller.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/img/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style-preview_galery.css">
    <title>Affichage et contrôle du contenu des galeries</title>
</head>

<body class="body">

    <header class="header">
        <nav>
            <div class="backdrop"></div>
            <ul>
                <li><a class="navLink nav-link btn text-navbar" href="upload_galery.php">Gestion des téléchargements</a></li>
                <li><a class="navLink nav-link btn text-navbar" href="../index.php">Retour sur le site</a></li>
                <li><a class="navLink nav-link btn text-navbar" href="upload_galery.php?action=disconnect">Deconnexion</a></li>
            </ul>
        </nav>

        <button class="menu">Menu</button>
        <div>
            <img id="logoHeader" src="../image/logo-remove-in2.png">
            <p class="titleHeader">Espace professionnel</p>
        </div>
    </header>

    <div class="row align-content-center justify-content-center">
        <p class="titleGalery">Galerie Photos</p>
        <div class="card-column col-10 m-auto">
            <div class="row">
                <?php
                foreach ($filesImg as $image) {
                    if (!is_dir("../uploadImg/$image")) {
                ?>
                        <div class="mx-auto">
                            <img class="boxPicture" src="../uploadImg/<?= $image ?>">
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <div class="row align-content-center justify-content-center">
        <p class="titleGalery">Galerie Vidéos</p>
        <div class="card-column col-10 m-auto">
            <div class="row">
                <?php
                foreach ($filesVideo as $video) {
                    if (!is_dir("../uploadVideo/$video")) {
                ?>
                        <div class="mx-auto">
                            <video class="boxVideos" src="../uploadVideo/<?= $video ?>" autoplay muted loop></video>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>


    <script src="../assets/js/script-preview_galery.js"></script>

</body>

</html>