<?php
/* Smarty version 4.0.4, created on 2022-02-09 09:45:30
  from '/var/www/html/ardis/app/Views/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_6203e19a747c71_79757191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16983b41c81c607951d644b9c4822fd393cc58b5' => 
    array (
      0 => '/var/www/html/ardis/app/Views/login.tpl',
      1 => 1644419023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6203e19a747c71_79757191 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description " content="Hotel ardis ,l 'hotel du 'climats ' ">
    <meta name="description " content="Decouvrez nos hotels sur tout les climats, nous avons des hotel sur les 4 coin du globe.
    Nous avons 3 hotel a dubai, 2 en suise est 2 a punt cana tousse ">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Nos activiter</title>
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
                            <a class="nav-link active text-black" aria-current="page" href="index.html">Accueil</a>
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
                            <a class="nav-link text-black" href="#">Nos activiter</a>
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

    
    <div class="wrapper fadeInDown">
      <div id="formContent">
        <!-- Tabs Titles -->
    
        <!-- Icon -->
        <div class="fadeIn first">
          <img src="assets/Images/logo.png" id="icon" alt="User Icon" />
        </div>
    
        <!-- Login Form -->
        <form action="" method="POST">
          <input type="text" id="login" class="fadeIn second" name="username" placeholder="username or email">
          <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
          <input type="submit" class="fadeIn fourth" value="Log In">
        </form>

    
      </div>
    </div>



    <!-- footer  -->
    <footer class=" card-footer d-flex align-items-center ">
        <div class="container ">
            <div class="row ">
                <div class="d-flex ">
                    <p class=" "> © 2021 Hotel ardis|Mention legale</p>
                    <p>| Email: hotel@ardis.com |  Numero mobile: 06 06 06 06 06</p>
                    <img src="../assets/Images/Objet dynamique vectoriel.png " alt="logo_icone " height="30">
                </div>
            </div>
        </div>
    </footer>   
</body>
    <?php echo '<script'; ?>
 src="//code.jquery.com/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/bootstrap.bundle.js"><?php echo '</script'; ?>
>
</html><?php }
}
