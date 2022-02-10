<?php
/* Smarty version 4.0.4, created on 2022-02-10 09:39:45
  from 'C:\MAMP\htdocs\ardis\app\Views\punta_cana.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_620531c1028ed6_82722121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f30ba79a4bb9ba42c73e196e73c01236dab22f50' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\ardis\\app\\Views\\punta_cana.tpl',
      1 => 1644507583,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620531c1028ed6_82722121 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang=fr ">

<head>
    <meta charset="UTF-8 ">
    <meta name="viewport " content="width=device-width, initial-scale=1.0 ">
    <meta name="description " content="Hotel ardis ,l 'hotel du 'climats ' ">
    <meta name="description " content="Decouvrez nos hotels sur tout les climats, nous avons des hotel sur les 4 coin du globe.
    Nous avons 3 hotel a dubai, 2 en suise est 2 a punt cana tousse ">
    <link rel="stylesheet " href="<?php echo base_url('assets/css/bootstrap.css');?>
">

    <link rel="stylesheet" href="<?php echo base_url((('assets/css/').($_smarty_tpl->tpl_vars['name_file']->value)).('.css'));?>
">
    <title>Punta cana</title>
</head>

<body>
    <!-- hedear -->
<header>
    <!-- navbar -->
    <nav class="navbar bg-transparent navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.html"><img src="../assets/Images/logo.png" alt="logo" width="80"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <!-- item navbar  -->
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="../index.html">Accueil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-black " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                             Nos hotels
                        </a>
                        <ul class="dropdown-menu bg-transparent" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item bg-transparent text-black" href="punta_cana.html">Punta cana</a></li>
                            <li><a class="dropdown-item bg-transparent text-black" href="dubai.html">Dubai</a></li>
                            <li><a class="dropdown-item bg-transparent text-black" href="suisse.html">Suisse</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="../reservation.html">Reservation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="../activiter.html">Nos activiter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="../restaurant.html">Restaurants</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="../galerie_photo.html">Galerie_photo</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="../login.html">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="../create_account.html">Creer un compte</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="../avis.html">Les avis </a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="container ">
    <!-- locate -->
    <div class="row " aria-label="breadcrumb ">
        <ol class="breadcrumb">
            <p>Vous ete ici: </p>
            <li class="breadcrumb-item"><a class='text-black' href="../index.html">Accueil</a></li>
            <li class="breadcrumb-item"><a class='text-black' href="#">Nos hôtels</a></li>
            <li class="breadcrumb-item active" aria-current="page">Punta cana</li>
        </ol>
    </div>
</div>

<article>
    <div class="container-fluid ">
        <img class="image_hotel img-fluid"  src="../assets/Images/punta_cana/photo-1571003123894-1f0594d2b5d9.png " alt="image punta_cana ">
        <div class="row ">
           <div class="description">
                <h1 class="title">Hotel ardis Sampatico</h1>
                <i class="fas fa-map-marker-alt "></i>
                <p class="city_hotel ">Punta cana</p>
                <div class="start ">
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                </div>
           </div>
            <div class="localisation_hotel ">
            <p>L'hotel se trouve en République domicaine a Punta cana.La nuit est <span style="color:#ff00aa ;">à partir de 250€.</span></p>
            <p>Pour les amoureux des caraibe, cette hotel ce trouve a l'extremité de la mer de caraibe, avec une vue sur la mer est est les palmiers est le phare de bayahibe</p>
            <a href="../galerie_photo.html" class=" btn galerie_photo ">Galerie_photo</a>
        </div>
        
        <div class="presentation ">
            <p>L'hotel est luxueux est bien assez proche de la mer.Cette hotel 4 etoile a 18 chambre a 4 lits chacune, 10 chambre a 2 lits</p>
            <p>Les sorite sont organiser selon vos envie, vous pouvez visiter le phare de bayahibe ou vous baigner dans Hoyo Azul</p>
            <a href="../reservation.html" class=" btn reserver-btn ">Réserver</a>
        </div>
    </div>

</article>

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
 src="../assets/js/bootstrap.bundle.js "><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://kit.fontawesome.com/f8e0ca0321.js " crossorigin="anonymous "><?php echo '</script'; ?>
>
</html><?php }
}