<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: ../index.php");
}

require "../Models/Database.php";
require "../Models/Gallery_Pictures.php";
require "../Models/Gallery_Videos.php";

$Picture = new GalleryPictures();

$informationsPicture = $Picture->getInformationsImage();

if (isset($_POST["returnButtonFile"])) {
    header("Location: ../Views/preview_galery.php");
}