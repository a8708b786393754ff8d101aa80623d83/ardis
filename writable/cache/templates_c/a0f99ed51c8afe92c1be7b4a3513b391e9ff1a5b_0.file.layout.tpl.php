<?php
/* Smarty version 4.0.4, created on 2022-02-21 09:26:13
  from 'C:\wamp64\www\ardis\app\Views\base\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_6213af15137020_93232835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0f99ed51c8afe92c1be7b4a3513b391e9ff1a5b' => 
    array (
      0 => 'C:\\wamp64\\www\\ardis\\app\\Views\\base\\layout.tpl',
      1 => 1645457146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/header.tpl' => 1,
    'file:base/footer.tpl' => 1,
  ),
),false)) {
function content_6213af15137020_93232835 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:base/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9563199856213af15133d73_95875102', 'content');
?>


<?php $_smarty_tpl->_subTemplateRender('file:base/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block 'content'} */
class Block_9563199856213af15133d73_95875102 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9563199856213af15133d73_95875102',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
}
