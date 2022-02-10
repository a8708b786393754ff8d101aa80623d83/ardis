<?php
/* Smarty version 4.0.4, created on 2022-02-10 12:38:04
  from '/var/www/html/ardis/app/Views/restaurant.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_62055b8ca37ac4_10265045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd92e1ec2168f805eef6888b5cbc2da9841b1c269' => 
    array (
      0 => '/var/www/html/ardis/app/Views/restaurant.tpl',
      1 => 1644516932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62055b8ca37ac4_10265045 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description " content="Hotel ardis ,l 'hotel du 'climats ' ">
    <meta name="description " content="Decouvrez nos hotels sur tout les climats, nous avons des hotel sur les 4 coin du globe.
    Nous avons 3 hotel a dubai, 2 en suise est 2 a punt cana tousse ">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/restaurant.css">
    <title>Restaurant</title>
</head>
<body>
    <!-- hedear -->
    <header>
        <!-- navbar -->
        <nav class="navbar bg-transparent navbar-expand-lg navbar-light ">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html"><img src="assets/Images/logo.png" alt="logo" width="80"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-black" aria-current="page" href="index.html">Acceuil</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-black" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Nos hotels
                    </a>
                            <ul class="dropdown-menu bg-transparent" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item bg-transparent text-black" href="nos_hotel/punta_cana.html">Punta cana</a></li>
                                <li><a class="dropdown-item bg-transparent text-black" href="nos_hotel/dubai.html">Dubai</a></li>
                                <li><a class="dropdown-item bg-transparent text-black" href="nos_hotel/suisse.html">Suisse</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="reservation.html">Reservation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="activiter.html">Nos activiter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="#">Restaurants</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="galerie_photo.html">Galerie photo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="login.html">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="create_account.html">Creer un compte</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="avis.html">Les avis </a>
                        </li>
                      
                    </ul>
                </div>
            </div>
        </nav>
    </header>

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
<?php echo '<script'; ?>
 src="../assets/js/bootstrap.bundle.js "><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://kit.fontawesome.com/f8e0ca0321.js " crossorigin="anonymous "><?php echo '</script'; ?>
>
</html><?php }
}