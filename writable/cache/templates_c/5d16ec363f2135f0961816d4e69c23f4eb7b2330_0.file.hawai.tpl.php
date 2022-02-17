<?php
/* Smarty version 4.0.4, created on 2022-02-17 07:22:41
  from '/var/www/html/ardis/app/Views/hawai.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_620e4c21d99897_28820665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d16ec363f2135f0961816d4e69c23f4eb7b2330' => 
    array (
      0 => '/var/www/html/ardis/app/Views/hawai.tpl',
      1 => 1645104158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620e4c21d99897_28820665 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_903478357620e4c21d98834_79919507', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/layout.tpl');
}
/* {block 'content'} */
class Block_903478357620e4c21d98834_79919507 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_903478357620e4c21d98834_79919507',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container ">
    <!-- locate -->

<article>
    <h1>Hotel Aloardis</h1>
    <div class="container-fluid ">
        <img class="image_suisse"src="<?php echo base_url('assets/Images/hawai.jpg');?>
" alt="image hawai hotel">
        <i class="fa-solid fa-envelope"></i>
        <div class="row ">
            <i class="fas fa-map-marker-alt gps_icone "></i>
            <p class="city_hotel ">Hawai/ Waikiki Beach</p>
            <div class="start ">
                <i class="fas fa-star "></i>
                <i class="fas fa-star "></i>
                <i class="fas fa-star "></i>
            </div>
            <div class="localisation_hotel ">
            <p>Notre hôtel Aloardis à 5 étoiles se situe  à Hawai , plus précisément à Waikiki Beach, la nuit est <span style="color:#ff00aa ;">à partir de 500 €</span>.</p>
            <p>L'hôtel est situé a quelques pas de la mer : amoureux en lune de miel , cet hôtel est pour vous! Cette hôtel a 10 chambres avec uniquement des lits deux places .</p>
            <a href="../galerie_photo.html" class=" btn galerie_photo ">Galerie_photo</a>
        </div>

        <div class="presentation ">
            <p>Pour les activités , nous vous proposont une balade en bateau , nager avec les dauphins et une visite de l'île en avion.</p>
            <a href="../reservation.html" class=" btn reserver-btn  ">Réserver</a>
        </div>
    </div>
</article>
<?php
}
}
/* {/block 'content'} */
}
