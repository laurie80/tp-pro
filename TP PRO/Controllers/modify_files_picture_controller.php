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

$informationsPicture = $Picture->getOneImageInformations($id);


