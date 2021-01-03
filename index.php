<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="assets/css/img/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>TEST MENU NAVIGATION PLEIN ECRAN</title>
</head>

<body>

    <header>
        <nav>
            <div class="backdrop"></div>
            <ul>
                <li><a class="navLink nav-link btn text-navbar" href="#presentation">À propos</a></li>
                <li><a class="navLink nav-link btn text-navbar" href="#galleryPict">Photos</a></li>
                <li><a class="navLink nav-link btn text-navbar" href="#galleryVid">Vidéos</a></li>
                <li><a class="navLink nav-link btn text-navbar" href="#equipments">Drones</a></li>
                <li><a class="navLink nav-link btn text-navbar" href="#contact">Contact</a></li>
            </ul>
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
            <div class="logoEnts col-lg-4 col-md-10 col-sm-12 d-flex align-content-center justify-content-center">
                <img class="logoImg d-flex align-content-center justify-content-center" src="image/logo-remove.png"
                    alt="Logo Vision By Sky">
            </div>
            <div class="col-lg-8 col-sm-12 justify-content-center">
                <h1 class="text-center col-12">A propos</h1>
                <p class="text-center col-12">Pilote professionnel de drones depuis plusieurs années,
                    je propose de mettre à dispositon mon matériel et mes services pour réaliser vos projets.</p>
                <p class="text-center col-12">Je vous invite à parcourir les galeries photos et vidéos afin de pouvoir
                    découvrir mon univers de travail mais aussi les drones que j'utilise.</p>
                <p class="text-center col-12">Bonne visite !</p>
            </div>
        </div>

        <div class="row" id="galleryPict">
            <div class="col-lg-12 col-sm-12 justify-content-center">
                <h1 class="text-center col-12">Galerie Photos</h1>
                <p>Faire une page admin avec upload de fichiers photos qui s'insére dans cette section avec des cards
                    bootstrap.</p>
            </div>
        </div>

        <div class="container h-100">

            <div class="row align-items-center justify-content-center h-100">

                <div class="col-md-8 col-lg-6 p-3">
                    <div class="bg-light shadow p-3">
                        <div id="citations" class="text-center">
                            "Le réaliste s'il est un artiste, cherchera, non pas à nous montrer la photographie banale
                            de la vie,
                            mais à nous en donner la vision plus complète, plus saississante, plus probante que la
                            réalité même."
                        </div>
                        <div class="bg-secondary w-25 mx-auto p-1 my-4"></div>
                        <div id="author" class="text-center">
                            Guy de Maupassant
                        </div>
                    </div>

                    <div id="newCitation" class="mt-2 text-center p-3 text-white font-weight-bold text-uppercase">
                        Nouvelle citation
                    </div>
                </div>

            </div>

        </div>

        <div class="row" id="galleryVid">
            <div class="col-lg-12 col-sm-12 justify-content-center">
                <h1 class="text-center">Galerie Vidéos</h1>
                <p>Faire une page admin avec upload de fichiers vidéos qui s'insére dans cette section avec des cards
                    bootstrap.</p>
            </div>
        </div>

        <div class="row justify-content-center" id="equipments">
            <div class="col-lg-12 col-sm-12">
                <h1 class="text-center">Drones Professionnels</h1>
            </div>
            <div class="card col-lg-4 col-md-8 col-sm-12 align-items-center justify-content-center">
                <img class="card-img-top firstDrone" src="image/drone_11-remove.png" alt="Drone professionnel modèle n°1">
                <div class="card-body">
                    <h2 class="nameEquipments text-center">Inspire 2</h2>
                    <p class="card-text">
                        - Équipé de capteurs d’obstacles et d’une caméra FPV </br>
                        - Équipé d’un double parachute et coupe-circuit </br>
                        - Deux nacelles "Zenmuse" </br>
                        - Capteur grand micro 4/3 de 20MP </br>
                        - Caméra Super 35 qui filme en 6k RAW </br>
                        - Capable d’accueillir un disque SSD jusqu’à 480 Go
                    </p>
                </div>
            </div>
            <div class="card col-lg-4 col-md-8 col-sm-12 align-items-center justify-content-center">
                <img class="card-img-top secondDrone" src="image/drone_2.png" alt="Drone professionnel modèle n°2">
                <div class="card-body">
                    <h2 class="nameEquipments text-center">Mavic Air</h2>
                    <p class="card-text">
                        - Le petit drone le plus performant disponible dans le commerce </br>
                        - Équipé d'une batterie 3S de 2375 mAh qui lui permet de tenir jusqu’à 21 minutes dans les airs </br>
                        - Vidéos 4k bluffantes  </br>
                        - Stabilité extraordinaire grâce à une nouvelle nacelle mécanique 3 axes </br>
                        - Trés léger avec son poids de seulement 430 grammes </br>
                    </p>
                </div>
            </div>
        </div>

        <div class="row" id="contact">
            <div class="col-lg-12 col-sm-12 justify-content-center">
                <h1 class="text-center">Formulaire de contact</h1>
            </div>
        </div>

        <footer>
            <div class="row" id="infosFooter">
                <div class="informations col-lg-6 col-sm-12 justify-content-center">
                    <p class="text-center col-12">Informations de contact</p>
                    <p class="text-center col-12">Informations de contact</p>
                    <p class="text-center col-12">Informations de contact</p>
                    <p class="text-center col-12">Informations de contact</p>
                </div>
                <div class="divLogo col-lg-6 col-sm-12 d-flex align-content-center justify-content-center">
                    <img class="logoFooter col-8 d-flex align-content-center justify-content-center"
                        src="image/logo-remove.png" alt="Logo Vision By Sky">
                </div>
            </div>
        </footer>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script src="assets/js/script.js"></script>

</body>

</html>