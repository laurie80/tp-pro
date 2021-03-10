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
                <li><a class="navLink nav-link btn text-navbar" href="../index.php">Accueil site</a></li>
                <li><a class="navLink nav-link btn text-navbar" href="upload_galery.php">Téléchargements fichiers</a></li>
                <li><a class="navLink nav-link btn text-navbar" href="upload_galery.php?action=disconnect">Deconnexion</a></li>
            </ul>
        </nav>

        <button class="menu">Menu</button>
        <div>
            <img id="logoHeader" src="../image/logo-remove-in2.png">
            <p class="titleHeader">Espace professionnel</p>
        </div>
    </header>

    <p class="title text-center">Bienvenue <?= $_SESSION["admin"]["userName"] ?></p>
    <p class="title text-center">Gestion de galeries</p>
    <div class="row align-content-center justify-content-center">
        <p class="titleGalery">Galerie Photos</p>
        <div class="card-column col-10 m-auto">
            <div class="row">
                <?php
                foreach ($informationsPicture as $picture) {
                ?>
                    <div class="mx-auto">
                        <div>
                            <img class="boxPicture" src="../uploadImg/<?= $picture["picture_name"] . $picture["type_extension"] ?>">
                        </div>
                        <div class="infosFiles">
                            <ul>
                                <li>Nom de l'image : <?= $picture["picture_title"] ?></li>
                                <li>Date de mise en ligne : <?= strftime("%d / %m / %Y", strtotime($picture["picture_date"])) ?></li>
                                <li>Type extension image :<?= $picture["type_extension"] ?></li>
                            </ul>
                        </div>
                        <div class="d-flex justify-content-center align-items-center">
                            <form action="preview_galery.php" method="POST">
                                <button type="submit" name="deleteButtonPicture" class="deleteButtonPicture btn btn-danger m-1" value="<?= $picture["picture_name"] . $picture["type_extension"] ?>">Supprimer</button>
                            </form>
                            <form action="modify_files_picture.php" method="POST">
                                <button type="submit" name="modifyButtonPicture" class="modifyButtonPicture btn btn-info m-1" value="<?= $picture["id"] ?>">Modifier</button>
                            </form>
                        </div>
                    </div>
                <?php
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
                foreach ($informationsVideo as $video) {
                ?>
                    <div class="mx-auto">
                        <div>
                            <video class="boxVideos" src="../uploadVideo/<?= $video["video_name"] . $video["type_extension"] ?>" autoplay muted loop></video>
                        </div>
                        <div class="infosFiles">
                            <ul>
                                <li>Nom de la vidéo : <?= $video["video_title"] ?></li>
                                <li>Date de la prise de vue : <?= strftime("%d / %m / %Y", strtotime($video["video_date"])) ?></li>
                                <li>Type extension vidéo : <?= $video["type_extension"] ?></li>
                            </ul>
                        </div>
                        <div class="d-flex justify-content-center align-items-center">
                            <form action="preview_galery.php" method="POST">
                                <button type="submit" name="deleteButtonVideo" class="deleteButtonVideo btn btn-danger m-1" value="<?= $video["video_name"] . $video["type_extension"] ?>">Supprimer</button>
                            </form>
                            <form action="modify_files_video.php" method="POST">
                                <button type="submit" name="modifyButtonVideo" class="modifyButtonVideo btn btn-info m-1" value="<?= $video["id"] ?>">Modifier</button>
                            </form>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>


    <script src="../assets/js/script-preview_galery.js"></script>

</body>

</html>