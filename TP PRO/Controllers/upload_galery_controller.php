<?php

session_start();

if(!isset($_SESSION["admin"])) {
    header("Location: ../index.php");
}

if(isset($_GET["action"]) && $_GET["action"] == "disconnect") {
    unset($_SESSION["admin"]);
    session_destroy();
    header("Location: ../index.php");
}

require "../Models/Database.php";
require "../Models/Extensions.php";
require "../Models/Gallery_Pictures.php";
require "../Models/Gallery_Videos.php";


/** 
 * UPLOAD IMAGES
 */

isset($_POST['namePicture']) ? $pictureTitle = $_POST['namePicture'] : "";

if (isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] == 0 && isset($pictureTitle)) {
    $infosfichier = pathinfo($_FILES['fileToUpload']['name']);
    $extension_upload = mime_content_type($_FILES['fileToUpload']['tmp_name']);
    $extensions_autorisees = [
        'image/jpg', 'image/jpeg', 'image/gif', 'image/png', 'image/ai', 'image/eps',
        'image/pdf', 'image/psd', 'image/tif', 'image/svg'
    ];
    if (in_array($extension_upload, $extensions_autorisees)) {
        $Extensions = new Extensions();
        $GaleriePicture = new GalleryPictures();
        $extensionFile = strrchr($_FILES["fileToUpload"]["name"], ".");
        $id = $Extensions->getIdExtensions($extensionFile);
        $date = strftime("%Y-%m-%d", time());
        $nameImg = uniqid();
        move_uploaded_file($_FILES['fileToUpload']['tmp_name'], '../uploadImg/' . $nameImg . $extensionFile);
        $GaleriePicture->addPicture($nameImg, $date, $pictureTitle, $id["id"]);
        echo '<script>alert("L\'image à bien était téléchargé !")</script>';
    } else {
        echo '<script>alert("Format d\'image incorrect")</script>';
    }
}


/** 
 * UPLOAD VIDEOS
 */

isset($_POST['nameVideo']) ? $videoTitle = $_POST['nameVideo'] : "";

if (isset($_FILES['fileVideoToUpload']) && $_FILES['fileVideoToUpload']['error'] == 0 && isset($videoTitle)) {
    $infosfichier = pathinfo($_FILES['fileVideoToUpload']['name']);
    $extension_upload = mime_content_type($_FILES['fileVideoToUpload']['tmp_name']);
    $extensions_autorisees = [
        'video/mp4', 'video/m4v', 'video/mov', 'video/qt', 'video/avi', 'video/flv',
        'video/wmv', 'video/asf', 'video/mpeg', 'video/mpg', 'video/vob', 'video/mkv', 'video/asf', 'video/rm'
    ];
    if (in_array($extension_upload, $extensions_autorisees)) {
        $Extensions = new Extensions();
        $GalleryVideo = new GalleryVideos();
        $extensionFile = strrchr($_FILES["fileVideoToUpload"]["name"], ".");
        $id = $Extensions->getIdExtensions($extensionFile);
        $date = strftime("%Y-%m-%d", time());
        $nameVideo = uniqid();
        move_uploaded_file($_FILES['fileVideoToUpload']['tmp_name'], '../uploadVideo/' . $nameVideo . $extensionFile);
        $GalleryVideo->addVideo($nameVideo, $date, $videoTitle, $id["id"]);
        echo '<script>alert("La vidéo à bien était téléchargé !")</script>';
    } else {
        echo '<script>alert("Format de vidéo incorrect")</script>';
    }
}


