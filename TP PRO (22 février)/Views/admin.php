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
    <title>Espace Admninistrateur</title>
</head>

<body>

    <div class="container">

        <form action="admin.php" method="post">

            <p>Bonjour</p>
            <p>Bienvenue dans votre Espace Administrateur</p>
            <div>
                <input type="text" id="userName" name="userName" placeholder="Nom d'utilisateur">
                <p class="errors"><?= isset($arrayErrors["userName"]) ? $arrayErrors["userName"] : "" ?></p>
            </div>
            <div>
                <input type="password" id="password" name="password" placeholder="Mot de passe">
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
</body>

</html>