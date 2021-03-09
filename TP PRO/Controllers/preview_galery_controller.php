<?php

session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: ../index.php");
}

require "../Models/Database.php";
require "../Models/Gallery_Pictures.php";
require "../Models/Gallery_Videos.php";

$Picture = new GalleryPictures();
$Video = new GalleryVideos();

/**
 * Suppression d'une image en local et en BDD
 */

if (isset($_POST["deleteButtonPicture"])) {
    $nameImg = htmlspecialchars($_POST["deleteButtonPicture"]);
    $nameFile = explode(".", $nameImg);
    $deletePicture = $Picture->deletePicture($nameFile[0]);


    $imagesFiles = "../uploadImg/" . $nameImg;

    if (file_exists($imagesFiles)) {
        if (unlink($imagesFiles)) {
            $arrayErrors = $imagesFiles . "supprimer avec succés";
        }
    } else {
        $arrayErrors = "Echec de la suppression de" . $nameImg;
    }
}

/**
 * Suppression d'une vidéo en local et en BDD
 */

if (isset($_POST["deleteButtonVideo"])) {
    $nameVideo = htmlspecialchars($_POST["deleteButtonVideo"]);
    $nameFileVideo = explode(".", $nameVideo);
    $deleteVideo = $Video->deleteVideo($nameFileVideo[0]);


    $videoFiles = "../uploadVideo/" . $nameVideo;

    if (file_exists($videoFiles)) {
        if (unlink($videoFiles)) {
            $arrayErrors = $videoFiles . "supprimer avec succés";
        }
    } else {
        $arrayErrors = "Echec de la suppression de" . $nameVideo;
    }
}

/**
 * Lancement des méthodes pour récupérer les informations en BDD des images et des vidéos
 */

$informationsPicture = $Picture->getInformationsImage();
$informationsVideo = $Video->getInformationsVideo();
