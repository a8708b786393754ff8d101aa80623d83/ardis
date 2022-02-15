<?php
/* Smarty version 4.0.4, created on 2022-02-15 04:22:17
  from '/var/www/html/ardis/app/Views/galerie_photo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_620b7ed9276c28_63093754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a614fb53a3095cd1f9af131426456a5e547a8eb' => 
    array (
      0 => '/var/www/html/ardis/app/Views/galerie_photo.tpl',
      1 => 1644776290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620b7ed9276c28_63093754 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2040234976620b7ed92766b2_94211496', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/layout.tpl');
}
/* {block 'content'} */
class Block_2040234976620b7ed92766b2_94211496 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2040234976620b7ed92766b2_94211496',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
<?php
}
}
/* {/block 'content'} */
}
