<?php
/* Smarty version 4.0.4, created on 2022-02-13 15:03:11
  from '/var/www/html/ardis/app/Views/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_6209720f8ca8b1_25929433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16983b41c81c607951d644b9c4822fd393cc58b5' => 
    array (
      0 => '/var/www/html/ardis/app/Views/login.tpl',
      1 => 1644786176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6209720f8ca8b1_25929433 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1018078786209720f8c89b4_32610111', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/layout.tpl');
}
/* {block 'content'} */
class Block_1018078786209720f8c89b4_32610111 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1018078786209720f8c89b4_32610111',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="wrapper fadeInDown">
      <div id="formContent">
        <!-- Tabs Titles -->
        <?php if ((isset($_smarty_tpl->tpl_vars['user']->value))) {?>
        <h1><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</h1>          
        
        <?php }?>
    
        <!-- Icon -->
        <div class="fadeIn first">
          <img src="<?php echo base_url('assets/Images/logo.png');?>
" id="icon" alt="User Icon" />
        </div>
    
        <!-- Login Form -->
        <form action="login" method="POST">
          <input type="text" id="login" class="fadeIn second" name="username" placeholder="username or email">
          <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
          <input type="submit" class="fadeIn fourth" value="Log In">
        </form>

    
      </div>
    </div>
<?php
}
}
/* {/block 'content'} */
}
