<?php

session_start();

if(!isset($_SESSION["admin"])) {
    header("Location: ../index.php");
}

$dirImg = "../uploadImg";
$filesImg = scandir($dirImg);

$dirVideo = "../uploadVideo";
$filesVideo = scandir($dirVideo);

