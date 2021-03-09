<?php
session_start();

require "../Models/Database.php";
require "../Models/Admin.php";

if (isset($_POST["connectAdmin"])) {

    $regexUsername = "/^[a-zA-Z0-9éèàëïä -]{5,20}$/";
    $regexPassword = "/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-z^A-Z^0-9]).{8,}$/";

    $arrayErrors = [];


    if (isset($_POST["userName"])) {
        if (preg_match($regexUsername, $_POST["userName"])) {
            $securedUsername = htmlspecialchars($_POST["userName"]);
        } else {
            $arrayErrors["userName"] = "Champ 'Nom d'utilisateur' non valide.";
        }
        if (empty($_POST["userName"])) {
            $arrayErrors["userName"] = "Veuillez renseigner le champ";
        }
    }

    if (isset($_POST["password"])) {
        if (preg_match($regexPassword, $_POST["password"])) {
            $securedPassword = $_POST["password"];
        } else {
            $arrayErrors["password"] = "Champ 'Mot de passe' non valide.";
        }
        if (empty($_POST["password"])) {
            $arrayErrors["password"] = "Veuillez renseigner le champ";
        }
    }

    if (isset($securedUsername)) {
        $admin = new Admin();
        $resultQuery = $admin->getInformationsConnexionAdmin($securedUsername);
        if (!empty($resultQuery) && isset($securedPassword)) {
            if (password_verify($securedPassword, $resultQuery["admin_password"])) {
                $admin = [];
                $admin["id"] = $resultQuery["id"];
                $admin["userName"] = $resultQuery["admin_name"];
                $admin["password"] = $resultQuery["admin_password"];
                $admin["mail"] = $resultQuery["admin_mail"];
                $_SESSION["admin"] = $admin;
                header("Location: ../Views/upload_galery.php");
            }
        } else {
            $arrayErrors["userName"] = "Vérifier vos informations de connexion";
            $arrayErrors["password"] = "Vérifier vos informations de connexion";

        }
    } else {
        if (!isset($arrayErrors["userName"])) {
            $arrayErrors["userName"] = "Veuillez renseigner le champ";
        }
    }
}


