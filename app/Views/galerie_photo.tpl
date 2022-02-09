<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/galerie_photo.css">
    <title>Galerie photo</title>
</head>
<body>
     <!-- hedear -->
    <header>
        <!-- navbar -->
        <nav class="navbar bg-transparent navbar-expand-lg navbar-light ">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.html"><img src="assets/Images/logo.png" alt="logo" width="80"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <!-- item navbar  -->
                        <li class="nav-item">
                            <a class="nav-link active " aria-current="page" href="./index.html">Accueil</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-black" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Nos hôtels
                            </a>
                            <ul class="dropdown-menu bg-transparent" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item bg-transparent text-black" href="./nos_hotel/punta_cana.html">Punta cana</a></li>
                                <li><a class="dropdown-item bg-transparent text-black" href="./nos_hotel/dubai.html">Dubai</a></li>
                                <li><a class="dropdown-item bg-transparent text-black" href="./nos_hotel/suisse.html">Suisse</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="reservation.html">Réservation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="activiter.html">Nos activités</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="restaurant.html">Restaurants</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="galerie_photo.html">Galerie photo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="login.html">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="create_account.html">Créer un compte</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="avis.html">Les avis </a>
                        </li>
                      
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container ">
        <!-- locate -->
        <div class="row " aria-label="breadcrumb ">
            <ol class="breadcrumb ">
                <li>Vous êtes ici: </li>
                <li class="breadcrumb-item ">
                    <a href="./index.html " class="text-black ">
                        Accueil
                    </a>
                </li>
                <li class="breadcrumb-item ">
                    <a href="galerie_photo.html" class="text-black ">
                        Galerie photos
                    </a>
                </li>
            </ol>
        </div>
    </div>

    <section>
        <article>
            <h2 class="text-center">Dubai</h2>
            <img class="dubai_photos" src="assets/Images/dubai/hotel-desert-dubai.png" alt="dubai_photo_terrase">
            <img class="dubai_photos" src="assets/Images/dubai/istockphoto-182404406-170667a.jpg" alt="dubia_photo">
            <img class="dubai_photos" src="assets/Images/dubai/istockphoto-512882668-170667a.jpg" alt="dubai_room">
            <img class="dubai_photos" src="assets/Images/dubai/bar.png" alt="bar_dubai">
        </article>

        <article>
            <h2 class="text-center">Punta cana</h2>
            <img class="punta_cana" src="assets/Images/punta_cana/photo-1563911302283-d2bc129e7570.png" alt="punta_cana">
            <img class="punta_cana" src="assets/Images/punta_cana/photo-1571003123894-1f0594d2b5d9.png" alt="punta_cana">
            <img class="punta_cana" src="assets/Images/punta_cana/photo-1618773928121-c32242e63f39.png" alt="punta_cana">
            <img class="punta_cana" src="assets/Images/punta_cana/resto.jpg" alt="resto_punta_cana">
        </article>

        <article>
            <h2 class="text-center">Suisse/ Tubehral</h2>
            <img class="suisse_photos" src="assets/Images/suisse/images2.png" alt="hotel apladris">
            <img class="suisse_photos" src="assets/Images/suisse/montagne_room.jpg" alt="suisse_room">
            <img class="suisse_photos" src="assets/Images/suisse/luge.png" alt="luge_suisse">
        </article>
    </section>


       <!-- footer  -->
       <footer class=" card-footer d-flex align-items-center ">
        <div class="container ">
            <div class="row ">
                <div class="d-flex ">
                    <p class=" "> © 2021 Hotel ardis|Mention legale</p>
                    <p>| Email: hotel@ardis.com |  Numero mobile: 06 06 06 06 06</p>
                    <img src="assets/Images/Objet dynamique vectoriel.png " alt="logo_icone " height="30">
                </div>
            </div>
        </div>
    </footer>   
</body>
    <script src="assets/js/bootstrap.bundle.js"></script>
</html>