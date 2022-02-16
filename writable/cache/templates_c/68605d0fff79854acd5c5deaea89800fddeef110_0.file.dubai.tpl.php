<?php
/* Smarty version 4.0.4, created on 2022-02-16 15:40:50
  from '/var/www/html/ardis/app/Views/dubai.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_620d6f62a1f866_75989213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68605d0fff79854acd5c5deaea89800fddeef110' => 
    array (
      0 => '/var/www/html/ardis/app/Views/dubai.tpl',
      1 => 1645047596,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620d6f62a1f866_75989213 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2035616669620d6f62a1dea4_67491374', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/layout.tpl');
}
/* {block 'content'} */
class Block_2035616669620d6f62a1dea4_67491374 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2035616669620d6f62a1dea4_67491374',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/ardis/app/ThirdParty/smarty/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
?>

    
<article>
    <div class="container-fluid ">
        <img class="image_dubai img-fluid" src="<?php echo (base_url('assets/Images')).('/');
echo (smarty_modifier_capitalize($_smarty_tpl->tpl_vars['name_file']->value)).('.webp');?>
" alt="image dubai">
        <i class="fa-solid fa-envelope"></i>
        <div class="row ">
            <div class="notes">
                <h1 class="title">Hotel ardis Dubai</h1>
                <i class="fas fa-map-marker-alt "></i>
                <p class="city_hotel ">Dubai</p>
                <div class="start ">
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                </div>
            </div>
            <div class="localisation_hotel">
            <p class=".text-center-sm">L'hôtel se trouve à Dubaï. si aiment les climats chauds et le desert, dans notre hôtel vous seriez au bon endroit.La nuit est <span style="color:#ff00aa ;">à partir de 320 €</span>.</p>
            <p class=".text-center-sm">L'hôtel est assez proche pour voit les tempêtess de sable arriver, ces tempêtes ne sont pas dangereux .Cet hôtel 5 étoiles à 5 ilots et dans un chaque ilot il y a 1 grand lit pour 2 personnes, ce séjour-là c'est fait pour les amoureux. Les sorties sont organisées selon vos envies, vous pouvez visiter la ville ou vous se balader en chameaux.</p>
            <a href="../galerie_photo.html" class=" btn galerie_photo ">Galerie_photo</a>
        </div>
        
        <div class="presentation ">
            <p class=".text-center-sm">L'hôtel est luxueux est bien assez proche de la mer. Cet hôtel 4 étoiles à 18 chambres à 4 lits chacune, 10 chambres à 2 lits.</p>
            <p class=".text-center-sm">Les sorites sont organisés selon vos envies, vous pouvez visiter le phare de bayahibe ou vous baigner dans Hoyo Azul.</p>
            <a href="../reservation.html" class=" btn reserver-btn ">Réserver</a>
        </div>
    </div>

</article>
<?php
}
}
/* {/block 'content'} */
}
