<?php

require "../Controllers/admin_controller.php";

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../assets/img/bootstrap.min.css"> -->
    <link rel="stylesheet" href="../assets/css/style-admin.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <title>Espace Admninistrateur</title>
</head>

<body>

    <div class="container">

        <form action="admin.php" method="post">
            <p>Bonjour</p>
            <p>Bienvenue dans votre Espace Administrateur</p>
            <div>
                <input type="text" id="userName" name="userName" placeholder="Nom d'utilisateur">
                <p class="errors"><?= isset($arrayErrors["userName"]) ? $arrayErrors["userName"] : ""?></p>
            </div>
            <div class="revealPassword">
                <input type="password" id="password" name="password" placeholder="Mot de passe">
                <button type="button" id="btnRevealPassword"><i id="togglePassword" class="fa fa-eye-slash"></i></button>
                <p class="errors"><?= isset($arrayErrors["password"]) ? $arrayErrors["password"] : "" ?></p>
            </div>
            <div>
                <input type="submit" name="connectAdmin" value="Connexion">
            </div>
        </form>

        <div>
            <a href="../index.php">Retour sur le site</a>
        </div>

    </div>

    <script src="../assets/js/script-admin.js"></script>

</body>

</html>