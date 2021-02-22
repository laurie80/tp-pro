<?php

// require "../Models/Database.php";
// require "../Models/Admin.php";
// require "../Models/Gallery_Pictures.php";
// require "../Models/Gallery_Videos.php";
// require "../Models/Extensions.php";

// <!-- UPLOAD DE FICHIER AVEC PREVIEW PHP -->
// Images

if (isset($_FILES['fileToUpload']) and $_FILES['fileToUpload']['error'] == 0) {
    $infosfichier = pathinfo($_FILES['fileToUpload']['name']);
    $extension_upload = mime_content_type($_FILES['fileToUpload']['tmp_name']);
    $extensions_autorisees = [
        'image/jpg', 'image/jpeg', 'image/gif', 'image/png', 'image/ai', 'image/eps',
        'image/pdf', 'image/psd', 'image/tif', 'image/svg'
    ];
    if (in_array($extension_upload, $extensions_autorisees)) {
        $extensionFile = strrchr($_FILES["fileToUpload"]["name"], ".");
        move_uploaded_file($_FILES['fileToUpload']['tmp_name'], '../uploadImg/' . uniqid($_FILES['fileToUpload']['name']) . $extensionFile);
        echo '<script>alert("L\'image à bien était téléchargé !")</script>';
    } else {
        echo '<script>alert("Format d\'image incorrect")</script>';
    }
}

// Vidéos
if (isset($_FILES['fileVideoToUpload']) and $_FILES['fileVideoToUpload']['error'] == 0) {
    $infosfichier = pathinfo($_FILES['fileVideoToUpload']['name']);
    $extension_upload = mime_content_type($_FILES['fileVideoToUpload']['tmp_name']);
    $extensions_autorisees = [
        'video/mp4', 'video/m4v', 'video/mov', 'video/qt', 'video/avi', 'video/flv',
        'video/wmv', 'video/asf', 'video/mpeg', 'video/mpg', 'video/vob', 'video/mkv', 'video/asf', 'video/rm'
    ];
    if (in_array($extension_upload, $extensions_autorisees)) {
        $extensionFile = strrchr($_FILES["fileVideoToUpload"]["name"], ".");
        move_uploaded_file($_FILES['fileVideoToUpload']['tmp_name'], '../uploadVideo/' . uniqid($_FILES['fileVideoToUpload']['name']) . $extensionFile);
        echo '<script>alert("La vidéo à bien était téléchargé !")</script>';
    } else {
        echo '<script>alert("Format de vidéo incorrect")</script>';
    }
}
