<?php
/* Smarty version 4.0.4, created on 2022-02-17 01:46:00
  from 'C:\MAMP\htdocs\ardis\app\Views\base\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_620dfd38dd3356_67061276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a58fa08db2211b30d0aad03ec2b35483aebfc31b' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\ardis\\app\\Views\\base\\layout.tpl',
      1 => 1645083809,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/header.tpl' => 1,
    'file:base/footer.tpl' => 1,
  ),
),false)) {
function content_620dfd38dd3356_67061276 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:base/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1760802393620dfd38dd2a37_00170988', 'content');
?>


<?php $_smarty_tpl->_subTemplateRender('file:base/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block 'content'} */
class Block_1760802393620dfd38dd2a37_00170988 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1760802393620dfd38dd2a37_00170988',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
}