<?php

// require "../Models/Admin.php";
// require "../Models/Database.php";
// require "../Models/Gallery_Pictures.php";
// require "../Models/Gallery_Videos.php";
// require "../Models/Extensions.php";

if (isset($_POST["connectAdmin"])) {

    $regexUsername = "/^[a-zA-Zéèàëïä -]{3,20}$/";
    $regexPassword = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$/";

    if (preg_match($regexUsername, $_POST["userName"])) {
        $securedUsername = htmlspecialchars($_POST["userName"]);
    } else {
        $arrayErrors["userName"] = "Champ 'Nom d'utilisateur' non valide, veuillez réessayer.";
    }
    if (preg_match($regexPassword, $_POST["password"])) {
        $securedPassword = $_POST["password"];
    } else {
        $arrayErrors["password"] = "Champ 'Mot de passe' non valide, veuillez réessayer.";
    }
}
