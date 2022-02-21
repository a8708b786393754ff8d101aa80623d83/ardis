<?php
/* Smarty version 4.0.4, created on 2022-02-21 04:47:25
  from 'C:\MAMP\htdocs\ardis\app\Views\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_62136dbdf01373_46977134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1700f4355f0cd22f81a820dc73f10d3bbfd4a8e3' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\ardis\\app\\Views\\login.tpl',
      1 => 1645440445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62136dbdf01373_46977134 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151418926762136dbdef8537_22482842', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/layout.tpl');
}
/* {block 'content'} */
class Block_151418926762136dbdef8537_22482842 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_151418926762136dbdef8537_22482842',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php if ((isset($_smarty_tpl->tpl_vars['message']->value)) && is_array($_smarty_tpl->tpl_vars['message']->value)) {?>
      <div class='container'>
        <div class='row'>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['message']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
          <div class="p-3 mb-2 bg-danger text-white"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</div>                                  
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      </div>
      <?php } else { ?>
        <?php echo '<script'; ?>
 type="text/javascript">
          window.location.replace("http://localhost/ardis/public/customers/");
        <?php echo '</script'; ?>
>
    <?php }?>
    <div class="wrapper fadeInDown">
      <div id="formContent">
        <!-- Tabs Titles -->
        <!-- Icon -->
        <div class="fadeIn first">
          <img src="<?php echo base_url('assets/Images/logo.png');?>
" id="icon" alt="User Icon" />
        </div>
    
        <!-- Login Form -->
        <form action="<?php echo base_url('/visitor/login/');?>
" method="POST">
          <input type="text" id="login" class="fadeIn second" name="username" placeholder="pseudo or email">
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
