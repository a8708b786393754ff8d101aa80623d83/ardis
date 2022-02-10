<?php
/* Smarty version 4.0.4, created on 2022-02-10 12:29:56
  from '/var/www/html/ardis/app/Views/reservation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_620559a45b0a61_12975692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3ea99295679a90e01af79e8aacbe2f779520814' => 
    array (
      0 => '/var/www/html/ardis/app/Views/reservation.tpl',
      1 => 1644516932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620559a45b0a61_12975692 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description " content="Hotel ardis ,l 'hotel du 'climats ' ">
    <meta name="description " content="Decouvrez nos hotels sur tout les climats, nous avons des hotel sur les 4 coin du globe.
    Nous avons 3 hotel a dubai, 2 en suise est 2 a punt cana tousse ">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/reserver.css">
    <title>Reservez</title>
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
                            <a class="nav-link text-black" href="#">Reservation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="activiter.html">Nos activiter</a>
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
                <li class="breadcrumb-item active" aria-current="page">Reserver</li>
            </ol>
        </div>
    </div>



    <div class="container">
        <div class="row">
            <div class="reservation">
                <h2>Reserver dés maintenant !! </h2>
                <div class="destination">
                    <label for="reservation">Hotel de destinations: </label>
                    <select name="reservation">
                        <option value="punta_cana">Hotel ardis Sampatico (Punta cana)</option>
                        <option value="dubai">Hotel ardis Dubai</option>
                        <option value="suisse">Hotel alpardis (suisse) </option>
                    </select>
                </div>
                <div class="date">
                    Du: <input type="date">
                    AU: <input type="date">
                </div>

                <div class="nombre_voyager">
                    <input type="numbre" placeholder="Nombre de voyageurs">
                </div>
            <input type="submit" class="btn" value="reserver">
          </div>
        </div>
    </div>

    <!-- footer -->
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
</html><?php }
}