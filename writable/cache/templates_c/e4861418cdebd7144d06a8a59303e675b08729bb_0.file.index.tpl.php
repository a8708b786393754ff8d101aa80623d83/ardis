<?php
/* Smarty version 4.0.4, created on 2022-02-21 11:51:04
  from 'C:\wamp64\www\ardis\app\Views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_6213d1089fb596_54804936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4861418cdebd7144d06a8a59303e675b08729bb' => 
    array (
      0 => 'C:\\wamp64\\www\\ardis\\app\\Views\\index.tpl',
      1 => 1645465861,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6213d1089fb596_54804936 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5482955266213d1089d9609_65371458', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/layout.tpl');
}
/* {block 'content'} */
class Block_5482955266213d1089d9609_65371458 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5482955266213d1089d9609_65371458',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 <!-- reservation -->
    <div class=" form-reservation position-absolute top-50 start-50 translate-middle">
        <div class="row bg-transparent">
            <h1 class="text-center text-white">Découvrez nos hôtels <br> sur tout les climats...</h1>
            <form class="form-control bg-transparent reservation">
                <label for="reservation" class="text-white">Du :</label>
                <input type="date" class="">
                <label for="reservation" class="text-white">Au :</label>
                <input type="date" class="">
                <input type="submit" name="sub" class="btn-dark" value="chercher">
            </form>
        </div>
    </div>

    <i class="fas fa-arrow-down"></i>

    <!-- partie meuilleur hotel/prix -->
    <section>
        <h2 class="text-center presentation_hotel">Le fleuron de nos hôtels aux meilleurs prix</h2>
        <div class="card-group">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['element']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <div class="card">
                <img src="<?php echo ((base_url('assets/Images/nos_hotels')).('/')).($_smarty_tpl->tpl_vars['item']->value->hotel_image);?>
" class="d-block mx-auto" alt="hotel_punt_cana" width="200px">
                <div class="card-body text-center">
                    <h5 class="card-title"><a href="<?php ob_start();
echo mb_strtolower($_smarty_tpl->tpl_vars['item']->value->hotel_nom, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
echo ((base_url('hotel')).('/')).($_prefixVariable1);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->hotel_ville;?>
</a></h5>
                    <p class="card-text ">Hotel ardis <?php echo $_smarty_tpl->tpl_vars['item']->value->hotel_nom;?>
</p>
                    <p style="color: #ff00aa ;" class="card-text">à partir de <?php echo $_smarty_tpl->tpl_vars['item']->value->hotel_price;?>
€</p>
                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <div class="container">
            <div class="d-grid gap-2 d-md-block">
                <a href="<?php echo base_url('#');?>
" class="btn">Pour en savoir plus</a>
            </div>
        </div>
    </section>
<?php
}
}
/* {/block 'content'} */
}
