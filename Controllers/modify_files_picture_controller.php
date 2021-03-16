<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: ../index.php");
}

require "../Models/Database.php";
require "../Models/Gallery_Pictures.php";
require "../Models/Gallery_Videos.php";

$Picture = new GalleryPictures();

$id = isset($_POST["modifyButtonPicture"]) ? ($_POST["modifyButtonPicture"]) : "";

/**
 * Si j'effectue une action de modification donc que je clique sur mon bouton "Valider" 
 * alors je stock les POST que j'attribue au variable de ma BDD
 * sinon si je n'effectue pas une action de modification alors je souhaite voir afficher les informations de ma page
 */
if(isset($_POST["validateButtonFile"]) && !empty($_POST["validateButtonFile"])) {
    $id = isset($_POST["validateButtonFile"]) ? ($_POST["validateButtonFile"]) : "";
    $pictureTitle = isset($_POST['newNameFile']) ? ($_POST["newNameFile"]) : "";
    $updateNameFile = $Picture->modifyNamePicture($id, $pictureTitle);
    header("Location: ../Views/preview_galery.php");
} else {
    $informationsPicture = $Picture->getOneImageInformations($id);
}


