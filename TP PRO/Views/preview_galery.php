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

    <p class="title text-center">Bienvenue dans votre espace de gestion de galeries</p>

    <div class="row align-content-center justify-content-center">
        <p class="titleGalery">Galerie Photos</p>
        <div class="card-column col-10 m-auto">
            <div class="row">
                <?php
                foreach ($filesImg as $image) {
                    if (!is_dir("../uploadImg/$image")) {
                ?>
                        <div class="mx-auto">
                            <div>
                                <img class="boxPicture" src="../uploadImg/<?= $image ?>">
                            </div>
                            <div class="infosFiles">
                                <ul>
                                    <li>Nom de l'image : </li>
                                    <li>Date de mise en ligne :</li>
                                    <li>Extension de l'image :</li>
                                </ul>
                            </div>
                            <form action="preview_galery.php" method="POST">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button type="submit" name="deleteButtonPicture" class="deleteButtonPicture btn btn-danger m-1" value="<?= $image ?>">Supprimer</button>
                                    <button type="submit" name="modifyButtonPicture" class="modifyButtonPicture btn btn-info m-1">Modifier</button>
                                </div>
                            </form>
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
                            <div>
                                <video class="boxVideos" src="../uploadVideo/<?= $video ?>" autoplay muted loop></video>
                            </div>
                            <div class="infosFiles">
                                <ul>
                                    <li>Nom de l'image :</li>
                                    <li>Date de la prise de vue :</li>
                                    <li>Extension de l'image :</li>
                                </ul>
                            </div>
                            <form action="preview_galery.php" method="POST">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button type="submit" name="deleteButtonVideo" class="deleteButtonVideo btn btn-danger m-1" value="<?= $video ?>">Supprimer</button>
                                    <button type="submit" name="modifyButtonVideo" class="modifyButtonVideo btn btn-info m-1">Modifier</button>
                                </div>
                            </form>
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