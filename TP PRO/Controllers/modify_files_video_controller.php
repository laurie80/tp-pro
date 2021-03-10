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

$informationsVideo = $Video->getOneVideoInformations($id);
