<?php
/* Smarty version 4.0.4, created on 2022-03-02 08:33:26
  from '/var/www/html/ardis/app/Views/activiter_archiver.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_621f80367ea8d7_04918383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97cab40de853ddbc7900248d17e575ba350818f6' => 
    array (
      0 => '/var/www/html/ardis/app/Views/activiter_archiver.tpl',
      1 => 1646231563,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_621f80367ea8d7_04918383 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2139437515621f80367e1ee9_08408942', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/layout.tpl');
}
/* {block 'content'} */
class Block_2139437515621f80367e1ee9_08408942 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2139437515621f80367e1ee9_08408942',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['activiter_archiver']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
    <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? count($_smarty_tpl->tpl_vars['item']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['item']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 0, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
         <div class="contanier">
          <div class="row">
            <div class="card" style="width: 18rem;">
              <img src="<?php echo ((base_url('assets/Images/activiter')).('/')).($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['foo']->value]->image);?>
" alt="img" class='card-img-top'>
                <div class="card-body">
                <h5 class="text-center card-title">Hotel <?php echo mb_strtolower($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['foo']->value]->nom_hotel, 'UTF-8');?>
</h5>
                <h6 class='text-center'><?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['foo']->value]->nom;?>
</h6>
                <ul>
                  <li>Pays: <?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['foo']->value]->loca;?>
</li>
                  <li>Date: <?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['foo']->value]->date;?>
</li>
                  <li>Tarif par personne: <strong><?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['foo']->value]->tarif;?>
€</strong></li>
                </ul>
                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['foo']->value]->descri;?>
</p>
                <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['foo']->value]->nom_hotel;
$_prefixVariable1 = ob_get_clean();
echo ((base_url('hotel')).('/')).($_prefixVariable1);?>
" class="btn btn-primary">Voir l'hotel</a>
              </div>
            </div>
          </div>
        </div>
      <?php }
}
?>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</section>
<?php
}
}
/* {/block 'content'} */
}
