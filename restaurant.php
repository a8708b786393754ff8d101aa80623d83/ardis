<?php 
    require_once 'headers.php'; 
    echo head('Restaurants');
?>
    <!-- locate -->
    <div class="container ">
        <div class="row " aria-label="breadcrumb ">
            <ol class="breadcrumb">
                <p>Vous ete ici: </p>
                <li class="breadcrumb-item"><a class='text-black' href="index.html">Acceuil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Restaurant</li>
            </ol>
        </div>
    </div>


    <!-- title  -->
    <h1>Nos menus</h1>


    <!-- section avec les chaque menu  -->
    <section>
        <img src="assets/Images/resto1.webp" alt="menu_enfant" class="menu_enfant_image">
        <img src="assets/Images/restaurant-01-plat.webp" alt="menu viande" class="menu_jour_image">
        <img src="assets/Images/resto_vegeterien.webp" alt=" menu vegeterien" class="menu_vegeterien_image">
        <article class="menu_enfant">
            <div class="container">
                <div class="row">
                    <h4 class="menu_enfant_titre">Menu enfant</h4>
                    <p class="menu_enfant_prix">Prix: 5.99 <i class="fas fa-euro-sign"></i></p>
                    <p class="menu_enfant-paragraphe">
                        Le menu enfant comporte une viande ou un
                        poisson avec accompagnement au choix
                        (légumes de saison, féculents) et un dessert au
                        chocolat ou aux fruits réalisé par notre pâtissier
                        Ce menu servi à la demande est servi aux
                        enfants de moins de 12 ans et permet à
                        l'ensemble de la table ou du groupe de passer
                        un agréable moment culinaire.
                    </p>
                </div>
            </div>
        </article>

        <article class="menu_jour">
            <div class="container">
                <div class="row">
                    <h4 class="menu_jour_titre">Menu du jour</h4>
                    <p class="menu_jour_prix">Prix: 9.99 <i class="fas fa-euro-sign"></i></p>
                    <p class="menu_jour_paragraphe">
                        Le menu jour de l'an comporte des œufs de poule surprise Nougat de foie gras glacé au jus de canard et
                        Clémentine Noix de Saint-Jacques de Dieppe poêlées / endives à la carbonara jus court Filet de perdreau 
                        cuisiné en canapé et glacé au porto.
                    </p>
                </div>
            </div>
        </article>

        <article class='menu_vegeterien'>
            <div class="container">
                <div class="row">
                    <h4 class="menu_vegeterien_titre">Menu vegeterien</h4>
                    <p class="menu_vegeterien_prix">Prix: 5.82 <i class="fas fa-euro-sign"></i></p>
                    <p>
                    Cette recette végétarienne
                    gastronomique est également vegan.
                    La sauce au cresson est réalisée à
                    base de noix de cajou qui lui ajoute
                    du corps, le condiment d’estragon et
                    amandes grillées donne de la texture
                    tandis que les pommes de terre rôties
                    offrent fondant et douceur.
                </p>
                </div>
            </div>
        </article>
    </section>


<?php
require_once 'footers.php'; 