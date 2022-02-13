<?php
/* Smarty version 4.0.4, created on 2022-02-13 11:12:00
  from '/var/www/html/ardis/app/Views/base/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_62093be013abf4_71561753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c5834c268270ba97c84b8f8df15447ebba46635' => 
    array (
      0 => '/var/www/html/ardis/app/Views/base/header.tpl',
      1 => 1644772318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62093be013abf4_71561753 (Smarty_Internal_Template $_smarty_tpl) {
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
            <a class="navbar-brand logo" href="<?php echo base_url('pages/pages/index');?>
"><img src="<?php echo base_url('assets/Images/logo.png');?>
" alt="logo" width="80"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <!-- item navbar  -->
                    <li class="nav-item">
                        <a class="nav-link active text-<?php echo $_smarty_tpl->tpl_vars['color_link_nav']->value;?>
" aria-current="page" href="<?php echo base_url('pages/pages/index');?>
">Accueil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-<?php echo $_smarty_tpl->tpl_vars['color_link_nav']->value;?>
" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                             Nos hotels
                        </a>
                        <ul class="dropdown-menu bg-transparent" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item bg-transparent text-<?php echo $_smarty_tpl->tpl_vars['color_link_nav']->value;?>
" href="<?php echo base_url('pages/pages/punta_cana');?>
">Punta cana</a></li>
                            <li><a class="dropdown-item bg-transparent text-<?php echo $_smarty_tpl->tpl_vars['color_link_nav']->value;?>
" href="<?php echo base_url('pages/pages/dubai');?>
">Dubai</a></li>
                            <li><a class="dropdown-item bg-transparent text-<?php echo $_smarty_tpl->tpl_vars['color_link_nav']->value;?>
" href="<?php echo base_url('pages/pages/suisse');?>
">Suisse</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-<?php echo $_smarty_tpl->tpl_vars['color_link_nav']->value;?>
" href="<?php echo base_url('pages/pages/reservation');?>
">Reservation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-<?php echo $_smarty_tpl->tpl_vars['color_link_nav']->value;?>
" href="<?php echo base_url('pages/pages/activiter');?>
">Nos activiter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-<?php echo $_smarty_tpl->tpl_vars['color_link_nav']->value;?>
" href="<?php echo base_url('pages/pages/restaurant');?>
">Restaurants</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-<?php echo $_smarty_tpl->tpl_vars['color_link_nav']->value;?>
" href="<?php echo base_url('pages/pages/galerie_photo');?>
">galerie photo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-<?php echo $_smarty_tpl->tpl_vars['color_link_nav']->value;?>
" href="<?php echo base_url('pages/pages/login');?>
">login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-<?php echo $_smarty_tpl->tpl_vars['color_link_nav']->value;?>
" href="<?php echo base_url('pages/pages/create_account');?>
">Creer un compte</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-<?php echo $_smarty_tpl->tpl_vars['color_link_nav']->value;?>
" href="<?php echo base_url('pages/pages/avis');?>
">Les avis </a>
                    </li>
                      <li class="nav-item">
                        <a class="nav-link text-<?php echo $_smarty_tpl->tpl_vars['color_link_nav']->value;?>
" href="<?php echo base_url('pages/pages/mdpoublier');?>
">mot de passe oublié </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header><?php }
}
