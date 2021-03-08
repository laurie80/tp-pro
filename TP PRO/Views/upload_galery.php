<?php
require "../Controllers/upload_galery_controller.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/img/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style-upload_galery.css">
    <title>Gestion/preview des galeries</title>
</head>

<body class="body">

    <header class="header">
        <nav>
            <div class="backdrop"></div>
            <ul>
                <li><a class="navLink nav-link btn text-navbar" href="preview_galery.php">Accés galeries</a></li>
                <li><a class="navLink nav-link btn text-navbar" href="../index.php">Retour sur le site</a></li>
                <li><a class="navLink nav-link btn text-navbar" href="upload_galery.php?action=disconnect">Deconnexion</a></li>
            </ul>
        </nav>

        <button class="menu">Menu</button>
        <div>
            <img id="logoHeader" src="../image/logo-remove-in2.png">
            <p class="titleHeader">Espace professionnel</p>
        </div>
    </header>

    <div class="row align-content-center justify-content-center" id="form">

        <p class="title col-lg-8 col-sm-10 text-center">Bienvenue dans votre espace de téléchargements</p>

        <form class="col-10 d-flex flex-wrap align-content-center justify-content-center m-3" action="upload_galery.php" method="post" enctype="multipart/form-data">

            <div class="formPreviewPicture col-xl-10 col-lg-10 col-md-10 col-sm-12 mb-4 text-center">

                <div>
                    <label class="titleGalery col-12" for="imagePreview">Preview galerie photos</label>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                </div>
                <div class="video d-flex align-content-center justify-content-center">
                    <img class="align-self-center" id="imgPreview" src="">
                </div>
                <div>
                    <label class="label" for="namePicture">Nom de l'image :</label>
                    <input id="namePicture" name="namePicture" type="text">
                </div>
                <!-- 
                <div>
                    <label class="label" for="pictureDate">Date de la prise de vue :</label>
                    <input id="pictureDate" name="pictureDate" type="date" placeholder="Format : aaaa/mm/jj">
                </div>
                <div>
                    <label class="label" for="typePicture">Type d'extension :</label>
                    <input id="typePicture" name="typePicture" type="text" placeholder="Exemple : png">
                </div> -->
                <div>
                    <button type="submit" name="uploadButtonPicture" class="uploadButtonPicture">Envoyer</button>
                </div>
            </div>

        </form>

        <form class="col-10 d-flex flex-wrap align-content-center justify-content-center m-3" action="upload_galery.php" method="post" enctype="multipart/form-data">

            <div class="formPreviewVideo col-xl-10 col-lg-10 col-md-10 col-sm-12 text-center">
                <div>
                    <label class="titleGalery col-12" for="videoPreview">Preview galerie videos</label>
                    <input type="file" accept="video/*" name="fileVideoToUpload" id="fileVideoToUpload">
                </div>
                <div class="d-flex align-content-center justify-content-center">
                    <video class="align-self-center" id="vdPreview" src="" autoplay muted loop></video>
                </div>
                <div>
                    <label class="label" for="nameVideo">Nom de la vidéo :</label>
                    <input id="nameVideo" name="nameVideo" type="text">
                </div>
                <!-- 
                <div>
                    <label class="label" for="videoDate">Date de la prise de vue :</label>
                    <input id="videoDate" name="videoDate" type="date" placeholder="Format : aaaa/mm/jj">
                </div>
                <div>
                    <label class="label" for="typeVideo">Type d'extension :</label>
                    <input id="typeVideo" name="typeVideo" type="text" placeholder="Exemple : mp4">
                </div> -->
                <div>
                    <button type="submit" name="uploadButtonPicture" class="uploadButtonPicture">Envoyer</button>
                </div>
            </div>

        </form>

    </div>

    <script src="../assets/js/script-galery.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

</body>

</html>