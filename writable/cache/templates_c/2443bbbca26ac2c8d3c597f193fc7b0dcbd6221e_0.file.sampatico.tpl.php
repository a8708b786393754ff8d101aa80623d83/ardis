<?php
/* Smarty version 4.0.4, created on 2022-02-17 01:46:15
  from 'C:\MAMP\htdocs\ardis\app\Views\sampatico.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_620dfd47ada677_39832883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2443bbbca26ac2c8d3c597f193fc7b0dcbd6221e' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\ardis\\app\\Views\\sampatico.tpl',
      1 => 1645083809,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620dfd47ada677_39832883 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_527214002620dfd47ad3133_89901979', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/layout.tpl');
}
/* {block 'content'} */
class Block_527214002620dfd47ad3133_89901979 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_527214002620dfd47ad3133_89901979',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\MAMP\\htdocs\\ardis\\app\\ThirdParty\\smarty\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
?>

<article>
    <div class="container-fluid ">
        <img class="image_hotel img-fluid"  src="<?php echo (base_url('assets/Images')).('/');
echo (smarty_modifier_capitalize($_smarty_tpl->tpl_vars['name_file']->value)).('.webp');?>
" alt="image punta_cana ">
        <i class="fa-solid fa-envelope"></i>
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
<?php
}
}
/* {/block 'content'} */
}
