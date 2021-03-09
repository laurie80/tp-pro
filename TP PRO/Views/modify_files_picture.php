<?php
require "../Controllers/modify_files_picture_controller.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/img/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style-modify_files_picture.css">
    <title>Modification du nom de fichier</title>
</head>

<body class="body">

    <header class="header">
        <div>
            <img id="logoHeader" src="../image/logo-remove-in2.png">
            <p class="titleHeader">Espace professionnel</p>
        </div>
    </header>

    <p class="title text-center">Bienvenue <?= $_SESSION["admin"]["userName"] ?>, veuillez modifier le nom de votre fichier</p>

    <div class="mx-auto">
        <div>
            <img class="boxPicture" src="../uploadImg/<?= $picture["picture_name"] . $picture["type_extension"] ?>">
        </div>
        <div class="infosFiles">
            <ul>
                <li>Nom de l'image :</li>
            </ul>
        </div>
        <form action="modify_files_picture.php" method="POST">
            <div class="text-center">
                <label class="label" for="newNameFile">Nouveau nom de l'image :</label>
                <input id="newNameFile" name="newNameFile" type="text">
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <button type="submit" name="validateButtonFile" class="validateButtonFile btn btn-danger m-1">Valider</button>
                <button type="submit" name="returnButtonFile" class="returnButtonFile btn btn-info m-1">Annuler</button>
            </div>
        </form>
    </div>

    <script src="../assets/js/script-modify_files_picture.js"></script>

</body>

</html>