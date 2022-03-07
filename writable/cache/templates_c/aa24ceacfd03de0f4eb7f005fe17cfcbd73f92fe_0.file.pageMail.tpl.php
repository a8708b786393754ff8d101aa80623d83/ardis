<?php
/* Smarty version 4.0.4, created on 2022-03-02 14:41:49
  from '/var/www/html/ardis/app/Views/pageMail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_621fd68d5f7038_05202367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa24ceacfd03de0f4eb7f005fe17cfcbd73f92fe' => 
    array (
      0 => '/var/www/html/ardis/app/Views/pageMail.tpl',
      1 => 1646253393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_621fd68d5f7038_05202367 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1591739605621fd68d5f3bc5_42747509', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/layout.tpl');
}
/* {block 'content'} */
class Block_1591739605621fd68d5f3bc5_42747509 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1591739605621fd68d5f3bc5_42747509',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="container mt-5">
  <?php if ((isset($_smarty_tpl->tpl_vars['msg_succes']->value))) {?>
    <div class="alert alert-success" role="alert">
      <?php echo $_smarty_tpl->tpl_vars['msg_succes']->value;?>

    </div>
    <?php if ((isset($_smarty_tpl->tpl_vars['msg_error']->value))) {?>
      <div class="alert alert-danger" role="alert">
        <?php echo $_smarty_tpl->tpl_vars['msg_error']->value;?>

      </div>
    <?php }?>
  <?php }?>
    <form action='<?php echo base_url('hotel/sendMail/');?>
' method="POST">
      <div class="form-group">
        <label>Nom</label>
        <input type="text" name="nom" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" name="mailTo" class="form-control" required>
      </div> 
      <div class="form-group">
        <label>Object</label>
        <input type="text" name="subject" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Message</label>
        <textarea rows="20" type="text" name="message" class="form-control" required>
        <pre>
        <?php echo $_smarty_tpl->tpl_vars['msg_prefixed']->value;?>

        </pre>
        </textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
      </div>
    </form>
  </div>
<?php
}
}
/* {/block 'content'} */
}
