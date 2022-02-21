<?php
/* Smarty version 4.0.4, created on 2022-02-21 12:00:22
  from 'C:\wamp64\www\ardis\app\Views\Sampatico.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_6213d336d50a28_63368802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9d63de447b4e080b37cadd6c72ff62403fe269d' => 
    array (
      0 => 'C:\\wamp64\\www\\ardis\\app\\Views\\Sampatico.tpl',
      1 => 1645465017,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6213d336d50a28_63368802 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1683492646213d336d3b015_30189132', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/layout.tpl');
}
/* {block 'content'} */
class Block_1683492646213d336d3b015_30189132 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1683492646213d336d3b015_30189132',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<article>
    <div class="container-fluid ">
        <img class="image_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" src="<?php echo (base_url('assets/Images/nos_hotels')).('/');
echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="image <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 hotel">
         <i class="fa fa-envelope share" aria-hidden="true"></i> 
        <div class="row ">
            <h1>Hotel <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h1>
            <i class="fas fa-map-marker-alt gps_icone "></i>
            <p class="city_hotel "><?php echo $_smarty_tpl->tpl_vars['pays']->value;?>
/ <?php echo $_smarty_tpl->tpl_vars['ville']->value;?>
</p>
            <div class="start ">
                <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['note']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['note']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
                    <i class="fas fa-star "></i>
                <?php }
}
?>
            </div>
            <div class="localisation_hotel ">
            <p><?php echo $_smarty_tpl->tpl_vars['contenue']->value;?>
</p>
            <p>A partir de <span style='color: #ff00aa;'><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
€</span></p>
            <a href="<?php echo base_url('galerie_photo');?>
" class=" btn galerie_photo ">Galerie_photo</a>
        </div>
        
        <div class="presentation ">
            <p>Pour les activités, nous vous proposerons du ski et de la luge et une visite guide dû la chocolaterie Lindt.</p>
            <a href="<?php echo base_url('reserver');?>
" class=" btn reserver-btn  ">Réserver</a>
        </div>
    </div>
</article>
<?php
}
}
/* {/block 'content'} */
}
