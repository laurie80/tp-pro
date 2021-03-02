<?php

session_start();

/**
 * FORMULAIRE DE CONTACT
 */

if (isset($_POST["submitButton"])) {

    $regexName = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/";
    $regexPhone = "/^(0|\+33)[1-9]([-. ]?[0-9]{2}){4}$/";
    $regexBirthdate = "/^[1-2][0-9]{3}[-][0-1][0-9][-]([0-2][0-9]|[3][0-1])$/";

    $arrayErrors = [];

    if (isset($_POST["lastname"])) {
        if (preg_match($regexName, $_POST["lastname"])) {
            $securedLastname = htmlspecialchars($_POST["lastname"]);
        } else {
            $arrayErrors["lastname"] = "Champ 'Nom' non valide, veuillez réessayer.";
        }
        if (empty($_POST["lastname"])) {
            $arrayErrors["lastname"] = "Veuillez renseigner le champ";
        }
    }

    if (isset($_POST["firstname"])) {
        if (preg_match($regexName, $_POST["firstname"])) {
            $securedFirstname = htmlspecialchars($_POST["firstname"]);
        } else {
            $arrayErrors["firstname"] = "Champ 'Prénom' non valide, veuillez réessayer.";
        }
        if (empty($_POST["firstname"])) {
            $arrayErrors["firstname"] = "Veuillez renseigner le champ";
        }
    }

    if (isset($_POST["email"])) {
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $securedMail = htmlspecialchars($_POST["email"]);
        } else {
            $arrayErrors["email"] = "Champ 'Email' non valide, veuillez réessayer.";
        }
        if (empty($_POST["email"])) {
            $arrayErrors["email"] = "Veuillez renseigner le champ";
        }
    }

    if (isset($_POST["phoneNumber"])) {
        if (preg_match($regexPhone, $_POST["phoneNumber"])) {
            $verifiedPhone = htmlspecialchars($_POST["phoneNumber"]);
        } else {
            $arrayErrors["phoneNumber"] = "Champ 'Numéro de téléphone' non valide, veuillez réessayer.";
        }
        if (empty($_POST["phoneNumber"])) {
            $arrayErrors["phoneNumber"] = "Veuillez renseigner le champ";
        }
    }

    if (isset($_POST["natureRequest"])) {
        if (empty($_POST["natureRequest"])) {
            $arrayErrors["natureRequest"] = "Veuillez renseigner le champ";
        }
    }

    if (isset($_POST["request"])) {
        if (empty($_POST["request"])) {
            $arrayErrors["request"] = "Veuillez renseigner le champ";
        }
    }

    if (empty($arrayErrors)) {
        $message = "Votre demande à bien été envoyé. Une réponse vous sera transmise dans les meilleurs délais. Merci.";
    } else {
        $message = "Une erreur s'est produite lors de l'envoi de votre message. Merci de renouveller votre demande.";
    }
}

/**
 * GALERIES PHOTOS ET VIDEOS
 */

$dirImg = "uploadImg";
$filesImg = scandir($dirImg);

$dirVideo = "uploadVideo";
$filesVideo = scandir($dirVideo);