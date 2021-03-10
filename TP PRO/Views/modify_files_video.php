<?php
require "../Controllers/modify_files_video_controller.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/img/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style-modify_files_video.css">
    <title>Modification du nom de fichier</title>
</head>

<body class="body">

    <header class="header">
        <div>
            <img id="logoHeader" src="../image/logo-remove-in2.png">
            <p class="titleHeader">Espace professionnel</p>
        </div>
    </header>

    <p class="title text-center">Veuillez modifier le nom de votre fichier</p>

    <div class="mx-auto">
        <div class="text-center">
            <video class="boxVideos" src="../uploadVideo/<?= $informationsVideo["video_name"] . $informationsVideo["type_extension"] ?>" autoplay muted loop></video>
        </div>
        <div class="infosFiles">
            <ul>
                <li>Nom de la vidéo :<?= $informationsVideo["video_title"] ?></li>
            </ul>
        </div>
        <form action="modify_files_video.php" method="POST">
            <div class="text-center">
                <label class="label" for="newNameFile">Nouveau nom de la vidéo :</label>
                <input id="newNameFile" name="newNameFile" type="text">
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <button type="submit" name="validateButtonFile" class="validateButtonFile btn btn-danger m-1">Valider</button>
                <a href="preview_galery.php"><button type="button" name="returnButtonFile" class="returnButtonFile btn btn-info m-1">Annuler</button><a>
            </div>
        </form>
    </div>

    <script src="../assets/js/script-modify_files_video.js"></script>

</body>

</html>