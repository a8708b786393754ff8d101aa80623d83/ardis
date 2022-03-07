<?php
/* Smarty version 4.0.4, created on 2022-03-07 01:56:07
  from '/var/www/html/ardis/app/Views/result_email.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_6225ba97bc0df0_20864222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8b6eba821dfd4cd1527e73cb8f03e51f37cad43' => 
    array (
      0 => '/var/www/html/ardis/app/Views/result_email.tpl',
      1 => 1646341544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6225ba97bc0df0_20864222 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16077581606225ba97bbc184_85743901', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/layout.tpl');
}
/* {block 'content'} */
class Block_16077581606225ba97bbc184_85743901 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16077581606225ba97bbc184_85743901',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container mt-5">
<?php if ((isset($_smarty_tpl->tpl_vars['msg_succes']->value))) {?>
    <div class="alert alert-success" role="alert">
      <?php echo $_smarty_tpl->tpl_vars['msg_succes']->value;?>

    </div>
<?php } elseif ((isset($_smarty_tpl->tpl_vars['msg_error']->value))) {?>
      <div class="alert alert-danger" role="alert">
        <?php echo $_smarty_tpl->tpl_vars['msg_error']->value;?>

      </div>
<?php }
}
}
/* {/block 'content'} */
}
