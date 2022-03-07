<?php
/* Smarty version 4.0.4, created on 2022-03-03 05:50:20
  from '/var/www/html/ardis/app/Views/result_search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_6220ab7c31a830_94549137',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bdb119180c49e5a4794ec0c2656bc0c995b2a0f' => 
    array (
      0 => '/var/www/html/ardis/app/Views/result_search.tpl',
      1 => 1646308191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6220ab7c31a830_94549137 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9689427846220ab7c3057e9_41129348', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/layout.tpl');
}
/* {block 'content'} */
class Block_9689427846220ab7c3057e9_41129348 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9689427846220ab7c3057e9_41129348',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ((isset($_smarty_tpl->tpl_vars['result']->value['avis']))) {?>
      <hr>
      <h2 class="text-center">Avis</h2>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value['avis'], 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <div class="card"  style="width: 25rem;">
                  <img class="card-img-top" src="<?php echo ((base_url('assets/Images/avis')).('/')).($_smarty_tpl->tpl_vars['item']->value['image']);?>
" alt="Card image cap">
                  <div class="card-body">
                        <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['item']->value['avis'];?>
</h5>
                        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['item']->value['contenue'];?>
</p>
                  </div>
                  <div class="card-body">
                        <a href="<?php echo base_url('avis');?>
" class="card-link btn btn-primary">Go</a>
                  </div>
            </div>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if ((isset($_smarty_tpl->tpl_vars['result']->value['hotel']))) {?>
      <hr>
      <h2 class="text-center">Hotel</h2>
      <div class="container">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value['hotel'], 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                  <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="<?php echo ((base_url('assets/Images/nos_hotels')).('/')).($_smarty_tpl->tpl_vars['item']->value['image']);?>
" alt="Card image cap">
                        <div class="card-body">
                              <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['item']->value['nom'];?>
</h5>
                              <a href="<?php echo mb_strtolower(((base_url('hotel')).('/')).($_smarty_tpl->tpl_vars['item']->value['nom']), 'UTF-8');?>
" class="btn btn-primary">Go</a>
                        </div>
                  </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['result']->value['activiter']))) {?>
      <hr>
      <h2 class="text-center">Activiter</h2>
      <div class="container">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value['activiter'], 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                  <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="<?php echo ((base_url('assets/Images/activiter')).('/')).($_smarty_tpl->tpl_vars['item']->value['image']);?>
" alt="Card image cap">
                        <div class="card-body">
                              <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['item']->value['nom'];?>
</h5>
                              <a href="<?php echo base_url('activiter');?>
" class="btn btn-primary">Go</a>
                        </div>
                  </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
<?php }?>

<?php if (empty($_smarty_tpl->tpl_vars['result']->value)) {?>
      <div class="container">
            <div class="well">
                  <h1><div class="ion ion-alert-circled"></div> La recherche n'a rien donner !!</h1>
                  <p>
                  <a class="btn btn-dark" href="<?php echo base_url('pages/');?>
">Revenir a la page d'acceuile</a>
                  </p>
            </div>
      </div>
      <style>
      body {
            background: #fbfbfb;
            font-family: 'Source Sans Pro', sans-serif;
      }
      .well {
            margin: 50px auto;
            text-align: center;
            padding: 25px;
            max-width: 600px;
      }
      h1, h2, h3, p {
            margin: 0;
      }
      p {
            font-size: 17px;
            margin-top: 25px;
      }
      p a.btn {
            margin: 0 5px;
      }
      h1 .ion {
            vertical-align: -5%;
            margin-right: 5px;
      }
      </style>
<?php }?>

<?php
}
}
/* {/block 'content'} */
}
