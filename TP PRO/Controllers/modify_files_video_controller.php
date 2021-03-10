<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: ../index.php");
}

require "../Models/Database.php";
require "../Models/Gallery_Pictures.php";
require "../Models/Gallery_Videos.php";

$Video = new GalleryVideos();

$id = isset($_POST["modifyButtonVideo"]) ? ($_POST["modifyButtonVideo"]) : "";

if(isset($_POST["validateButtonFile"]) && !empty($_POST["validateButtonFile"])) {
    $id = isset($_POST["validateButtonFile"]) ? ($_POST["validateButtonFile"]) : "";
    $videoTitle = isset($_POST['newNameFile']) ? ($_POST["newNameFile"]) : "";
    $updateNameFile = $Video->modifyNameVideo($id, $videoTitle);
    header("Location: ../Views/preview_galery.php");
} else {
    $informationsVideo = $Video->getOneVideoInformations($id);
}

