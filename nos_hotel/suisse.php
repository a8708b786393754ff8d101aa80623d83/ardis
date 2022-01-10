<?php 
    require_once '../headers.php'; 
    echo head('Suisse');
?>
<div class="container ">
    <!-- locate -->
    <div class="row " aria-label="breadcrumb ">
        <ol class="breadcrumb ">
            <li>Vous ete ici: </li>
            <li class="breadcrumb-item ">
                <a href="../index.html " class="text-black ">
                    Accueil
                </a>
            </li>
            <li class="breadcrumb-item ">
                <a href="# " class="text-black ">
                    Nos hotels
                </a>
            </li>
            <li class="breadcrumb-item ">
                <a href="# " class="text-black ">
                    Suisse
                </a>
            </li>
        </ol>
    </div>
</div>

<article>
    <h1>Hotel alpardis</h1>
    <div class="container-fluid ">
        <img class="image_suisse"src="../assets/Images/suisse/images2.png " alt="image suisse hotel">
        <div class="row ">
            <i class="fas fa-map-marker-alt gps_icone "></i>
            <p class="city_hotel ">Suisse/ Turbenthal</p>
            <div class="start ">
                <i class="fas fa-star "></i>
                <i class="fas fa-star "></i>
                <i class="fas fa-star "></i>
            </div>
            <div class="localisation_hotel ">
            <p>Notre hôtel alpadris à 3 étoiles se situe en Suisse, plus précisément à Turbenthal, la nuit est <span style="color:#ff00aa ;">à partir de 100 €</span>.</p>
            <p>L'hôtel est situé dans les alpes, pour les amoureux de la neige est des montagnes, cet hôtel est pour vous. Par notre qualité de service nous sommes à top ! Il y a 5 étages et 10 chambres, 5 a deux lits et 10 pour 4 lits.</p>
            <a href="../galerie_photo.html" class=" btn galerie_photo ">Galerie_photo</a>
        </div>
        
        <div class="presentation ">
            <p>Pour les activités, nous vous proposerons du ski et de la luge et une visite guide dû la chocolaterie Lindt.</p>
            <a href="../reservation.html" class=" btn reserver-btn  ">Réserver</a>
        </div>
    </div>
</article>


<?php
    require_once '../footers.php'; 