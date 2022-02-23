<?php
/* Smarty version 4.0.4, created on 2022-02-23 04:51:32
  from 'C:\wamp64\www\ardis\app\Views\base\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_621611b44bbfa6_90560115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0f99ed51c8afe92c1be7b4a3513b391e9ff1a5b' => 
    array (
      0 => 'C:\\wamp64\\www\\ardis\\app\\Views\\base\\layout.tpl',
      1 => 1645471522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/header.tpl' => 1,
    'file:base/footer.tpl' => 1,
  ),
),false)) {
function content_621611b44bbfa6_90560115 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:base/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1600367859621611b44b6f87_21817344', 'content');
?>


<?php $_smarty_tpl->_subTemplateRender('file:base/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block 'content'} */
class Block_1600367859621611b44b6f87_21817344 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1600367859621611b44b6f87_21817344',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
}
