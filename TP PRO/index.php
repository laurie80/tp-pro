<?php

require "Controllers/index_controller.php";

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <link rel="stylesheet" href="assets/img/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>TEST MENU NAVIGATION PLEIN ECRAN</title>
</head>

<body>

    <header>

        <nav>
            <div class="backdrop"></div>
            <?php
            if (isset($_SESSION["admin"])) {
            ?>
                <ul>
                    <li><a class="navLink nav-link btn text-navbar" href="#presentation">À propos</a></li>
                    <li><a class="navLink nav-link btn text-navbar" href="#galleryPict">Photos</a></li>
                    <li><a class="navLink nav-link btn text-navbar" href="#galleryVid">Vidéos</a></li>
                    <li><a class="navLink nav-link btn text-navbar" href="#equipments">Drones</a></li>
                    <li><a class="navLink nav-link btn text-navbar" href="#contact">Contact</a></li>
                    <li><a class="navLink nav-link btn text-navbar" href="Views/upload_galery.php">Espace Admin</a></li>
                </ul>
            <?php
            } else {
            ?>
                <ul>
                    <li><a class="navLink nav-link btn text-navbar" href="#presentation">À propos</a></li>
                    <li><a class="navLink nav-link btn text-navbar" href="#galleryPict">Photos</a></li>
                    <li><a class="navLink nav-link btn text-navbar" href="#galleryVid">Vidéos</a></li>
                    <li><a class="navLink nav-link btn text-navbar" href="#equipments">Drones</a></li>
                    <li><a class="navLink nav-link btn text-navbar" href="#contact">Contact</a></li>
                </ul>
            <?php
            }
            ?>
        </nav>

        <button class="menu">Menu</button>

        <div class="homeVideo">
            <video autoplay muted loop>
                <source src="video/pic-du-midi_2.mp4" type="video/mp4">
            </video>
        </div>

    </header>

    <div class="container-fluid col-12 p-0 m-0">

        <div class="row align-content-center justify-content-center" id="presentation">
            <div class="logoEnts col-xl-4 col-lg-8 col-md-10 col-sm-8 d-flex align-content-center justify-content-center">
                <img class="logoImg d-flex align-content-center justify-content-center" src="image/logo-remove-in2.png" alt="Logo Vision By Sky">
            </div>
            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 justify-content-center">
                <h1 class="text-center col-12">A propos</h1>
                <p class="text-presentation text-center col-12">Pilote professionnel de drones depuis plusieurs années,
                    je propose de mettre à disposition mon matériel et mes services pour réaliser vos projets.</p>
                <p class="text-presentation text-center col-12">Je vous invite à parcourir les galeries photos et vidéos
                    afin de pouvoir
                    découvrir mon univers de travail mais aussi les drones que j'utilise.</p>
                <p class="text-presentation text-center col-12">Bonne visite !</p>
            </div>
        </div>

        <div id="galleryPict">
            <div class="col-lg-12 col-sm-12 justify-content-center">
                <h1 class="text-center col-12"><span class="titlePicture"></span></h1>
                <div id="gridImgContainer">
                    <?php
                    foreach ($filesImg as $image) {
                        if (!is_dir("uploadImg/$image")) {
                    ?>
                            <div class="imgContainer">
                                <img class="imgInContainer" src="uploadImg/<?= $image ?>">
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="row align-items-center justify-content-center m-0 p-0 h-100">
            <div class="col-lg-10 col-md-10 col-sm-12">
                <div id="citations" class="text-center">
                    Le réaliste s'il est un artiste, cherchera, non pas à nous montrer la photographie banale
                    de la vie,
                    mais à nous en donner la vision plus complète, plus saississante, plus probante que la
                    réalité même.
                </div>
                <div id="author" class="text-center">
                    Guy de Maupassant
                </div>
                <div id="newCitation" class="d-flex justify-content-center">
                    <input type="submit" name="btn-citation" class="btn-citation" value="Nouvelle citation">
                </div>
            </div>
        </div>

        <div class="row" id="galleryVid">
            <div class="col-lg-12 col-sm-12 justify-content-center">
                <h1 class="text-center col-12"><span class="titleVideo"></span></h1>
                <div class="card-column col-10 m-auto">
                    <div class="row">
                        <?php
                        foreach ($filesVideo as $video) {
                            if (!is_dir("uploadVideo/$video")) {
                        ?>
                                <div class="mx-auto">
                                    <video class="boxVideos" src="uploadVideo/<?= $video ?>" autoplay muted loop></video>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center" id="equipments">
            <div class="col-lg-12 col-sm-12">
                <h1 class="text-center">Drones</h1>
            </div>
            <div class="card col-lg-4 col-md-8 col-sm-12 align-items-center justify-content-center">
                <img class="card-img-top firstDrone" src="image/drone_11-remove.png" alt="Drone professionnel modèle n°1">
                <div class="card-body h-100">
                    <h2 class="nameEquipments text-center">Inspire 2</h2>
                    <div class="card-text">
                        <p>- Équipé de capteurs d’obstacles et d’une caméra FPV</p>
                        <p>- Équipé d’un double parachute et coupe-circuit</p>
                        <p>- Deux nacelles "Zenmuse"</p>
                        <p>- Capteur grand micro 4/3 de 20MP</p>
                        <p>- Caméra Super 35 qui filme en 6k RAW</p>
                        <p>- Capable d’accueillir un disque SSD jusqu’à 480 Go</p>
                    </div>
                </div>
            </div>
            <div class="card col-lg-4 col-md-8 col-sm-12 align-items-center justify-content-center">
                <img class="card-img-top secondDrone" src="image/drone_2.png" alt="Drone professionnel modèle n°2">
                <div class="card-body h-100">
                    <h2 class="nameEquipments text-center">Mavic Air</h2>
                    <div class="card-text">
                        <p>- Le petit drone le plus performant disponible dans le commerce</p>
                        <p>- Équipé d'une batterie 3S de 2375 mAh qui lui permet de tenir jusqu’à 21 minutes dans les
                            airs</p>
                        <p>- Vidéos 4k bluffantes</p>
                        <p>- Stabilité extraordinaire grâce à une nouvelle nacelle mécanique 3 axes</p>
                        <p>- Trés léger avec son poids de seulement 430 grammes</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center justify-content-center" id="contact">
            <div class="col-lg-6 col-md-8 col-sm-12 justify-content-center">
                <h1 class="text-center">Contact</h1>
                <form class="form" action="index.php" method="post">
                    <div>
                        <label for="lastname">Nom :</label>
                        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Exemple : Dupont">
                        <p class="errors"><?= isset($arrayErrors["userName"]) ? $arrayErrors["userName"] : "" ?></p>
                    </div>
                    <div>
                        <label for="firstname">Prénom :</label>
                        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Exemple : Jean">
                        <p class="errors"><?= isset($arrayErrors["userName"]) ? $arrayErrors["userName"] : "" ?></p>
                    </div>
                    <div>
                        <label for="email">Adresse email :</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Exemple : dupont@gmail.com">
                        <p class="errors"><?= isset($arrayErrors["userName"]) ? $arrayErrors["userName"] : "" ?></p>
                    </div>
                    <div>
                        <label for="phoneNumber">Numéro de téléphone :</label>
                        <input type="phoneNumber" name="phoneNumber" id="phoneNumber" class="form-control" placeholder="Exemple : 0... ou +33...">
                        <p class="errors"><?= isset($arrayErrors["userName"]) ? $arrayErrors["userName"] : "" ?></p>
                    </div>
                    <div>
                        <label for="natureRequest">Nature de la demande :</label>
                        <input type="text" name="natureRequest" id="natureRequest" class="form-control" placeholder="Exemple : Demande d'informations">
                        <p class="errors"><?= isset($arrayErrors["userName"]) ? $arrayErrors["userName"] : "" ?></p>
                    </div>
                    <div>
                        <label for="request">Votre demande :</label>
                        <textarea id="request" name="request" rows="5" placeholder="Exemple : Je souhaiterais ..."></textarea>
                        <p class="errors"><?= isset($arrayErrors["userName"]) ? $arrayErrors["userName"] : "" ?></p>
                    </div>

                    <div class="d-flex justify-content-center">
                        <input type="submit" name="submitButton" class="button" value="Envoyer">
                    </div>
                </form>
            </div>
        </div>

        <footer>
            <div class="row" id="infosFooter">
                <div class="informations col-lg-6 col-md-6 col-sm-12">
                    <p class="text-center"><span class="h3">Nicolas MANNA</span></p>
                    <p class="text-center"><span class="h3">34200 SETE</span></p>
                    <p class="text-center"><span class="h3">06.35.24.69.33</span></p>
                    <p class="text-center"><span class="h3">nicolas.manna@icloud.com</span></p>
                </div>
                <div class="divLogo col-lg-6 col-md-6 col-sm-12 d-flex align-content-center justify-content-center">
                    <img class="logoFooter d-flex align-content-center justify-content-center" src="image/logo-remove.png" alt="Logo Vision By Sky">
                </div>
            </div>
        </footer>
    </div>

    <script src="assets/js/script.js"></script>

</body>

</html>