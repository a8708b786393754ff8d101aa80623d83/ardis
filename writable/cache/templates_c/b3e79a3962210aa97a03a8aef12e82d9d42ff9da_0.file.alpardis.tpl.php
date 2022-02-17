<?php
/* Smarty version 4.0.4, created on 2022-02-17 01:46:14
  from 'C:\MAMP\htdocs\ardis\app\Views\alpardis.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_620dfd463907b3_90917203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3e79a3962210aa97a03a8aef12e82d9d42ff9da' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\ardis\\app\\Views\\alpardis.tpl',
      1 => 1645083809,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620dfd463907b3_90917203 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_321163999620dfd463882f0_25496540', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/layout.tpl');
}
/* {block 'content'} */
class Block_321163999620dfd463882f0_25496540 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_321163999620dfd463882f0_25496540',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\MAMP\\htdocs\\ardis\\app\\ThirdParty\\smarty\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
?>


<article>
    <h1>Hotel alpardis</h1>
    <div class="container-fluid ">
        <img class="image_suisse"src="<?php echo (base_url('assets/Images')).('/');
echo (smarty_modifier_capitalize($_smarty_tpl->tpl_vars['name_file']->value)).('.webp');?>
" alt="image suisse hotel">
        <i class="fa-solid fa-envelope"></i>
        <div class="row ">
            <i class="fas fa-map-marker-alt gps_icone "></i>
            <p class="city_hotel ">Suisse/ Turbenthal</p>
            <div class="start ">
                <i class="fas fa-star "></i>
                <i class="fas fa-star "></i>
                <i class="fas fa-star "></i>
            </div>
            <div class="localisation_hotel ">
            <p>Notre hôtel alpadris à 3 étoiles se situe en Suisse, plus précisément à Turbenthal, la nuit est <span style="color:#ff00aa ;">à partir de 100 €</span>.</p>
            <p>L'hôtel est situé dans les alpes, pour les amoureux de la neige est des montagnes, cet hôtel est pour vous. Par notre qualité de service nous sommes à top ! Il y a 5 étages et 10 chambres, 5 a deux lits et 10 pour 4 lits.</p>
            <a href="../galerie_photo.html" class=" btn galerie_photo ">Galerie_photo</a>
        </div>
        
        <div class="presentation ">
            <p>Pour les activités, nous vous proposerons du ski et de la luge et une visite guide dû la chocolaterie Lindt.</p>
            <a href="../reservation.html" class=" btn reserver-btn  ">Réserver</a>
        </div>
    </div>
</article>
<?php
}
}
/* {/block 'content'} */
}
