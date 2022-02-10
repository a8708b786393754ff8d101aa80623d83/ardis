<?php
/* Smarty version 4.0.4, created on 2022-02-10 09:59:25
  from 'C:\MAMP\htdocs\ardis\app\Views\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_6205365d95e753_60798617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f491b40eb8a9e0e55c9c214534cee1e71a7f329' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\ardis\\app\\Views\\header.tpl',
      1 => 1644508711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6205365d95e753_60798617 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description " content="Hotel ardis ,l 'hotel du 'climats ' ">
    <meta name="description " content="Decouvrez nos hotels sur tout les climats, nous avons des hotel sur les 4 coin du globe.
    Nous avons 3 hotel a dubai, 2 en suise est 2 a punt cana tousse ">
    <link rel="stylesheet " href="<?php echo base_url('assets/css/bootstrap.css');?>
">
    <link rel="stylesheet" href="<?php echo base_url((('assets/css/').($_smarty_tpl->tpl_vars['name_file']->value)).('.css'));?>
">
    <title><?php echo $_smarty_tpl->tpl_vars['name_file']->value;?>
</title>
</head>
<?php if ($_smarty_tpl->tpl_vars['name_file']->value == 'index') {?>
<body style="background-image: url(<?php echo base_url('assets/Images/background.jpg');?>
)">
<?php } elseif ($_smarty_tpl->tpl_vars['name_file']->value == 'activiter') {?>
<body style="background-image: url(<?php echo base_url('assets/Images/desert_activiter.jpg');?>
)">
<?php } else { ?>
<body>
<?php }?>
    <!-- hedear -->
<header>
    <!-- navbar -->
    <nav class="navbar bg-transparent navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <a class="navbar-brand logo" href="<?php echo base_url('index.tpl');?>
"><img src="<?php echo base_url('assets/Images/logo.png');?>
" alt="logo" width="80"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <!-- item navbar  -->
                    <li class="nav-item">
                        <a class="nav-link active text-black" aria-current="page" href="<?php echo base_url('index.tpl');?>
">Accueil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-black" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                             Nos hotels
                        </a>
                        <ul class="dropdown-menu bg-transparent" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item bg-transparent text-black" href="<?php echo base_url('punta_cana.tpl');?>
">>Punta cana</a></li>
                            <li><a class="dropdown-item bg-transparent text-black" href="<?php echo base_url('dubai.tpl');?>
">>Dubai</a></li>
                            <li><a class="dropdown-item bg-transparent text-black" href="<?php echo base_url('suisse.tpl');?>
">>Suisse</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="<?php echo base_url('reservation.tpl');?>
">Reservation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="<?php echo base_url('activiter.tpl');?>
">Nos activiter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="<?php echo base_url('restaurant.tpl');?>
">Restaurants</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="<?php echo base_url('galerie_photo.tpl');?>
">Galerie_photo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="<?php echo base_url('login.tpl');?>
">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="<?php echo base_url('create_account.tpl');?>
">Creer un compte</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="<?php echo base_url('avis.tpl');?>
">Les avis </a>
                    </li>
                   
                </ul>
            </div>
        </div>
    </nav>
</header><?php }
}
