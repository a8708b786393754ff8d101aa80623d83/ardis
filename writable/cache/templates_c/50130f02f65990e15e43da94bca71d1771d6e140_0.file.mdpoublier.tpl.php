<?php
/* Smarty version 4.0.4, created on 2022-03-01 09:10:03
  from '/var/www/html/ardis/app/Views/mdpoublier.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_621e374bd37784_85872679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50130f02f65990e15e43da94bca71d1771d6e140' => 
    array (
      0 => '/var/www/html/ardis/app/Views/mdpoublier.tpl',
      1 => 1646147344,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_621e374bd37784_85872679 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_768880029621e374bd316e2_39025293', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/layout.tpl');
}
/* {block 'content'} */
class Block_768880029621e374bd316e2_39025293 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_768880029621e374bd316e2_39025293',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="text-center">
                              <h3><i class="fa fa-lock fa-4x"></i></h3>
                              <?php if (!empty($_smarty_tpl->tpl_vars['message']->value)) {?>
                                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['message']->value, 'msg', false, 'color');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['color']->value => $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                                    <div class="p-3 mb-2 bg-<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
 text-white"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</div>                                  
                                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                              <?php }?>
                              <h2 class="text-center">Mot de passe oublié ?</h2>
                              <p>Demandez votre mot de passe .</p>
                                <div class="panel-body">
                                  
                                  <form class="<?php echo base_url('/visitor/mdpoublier');?>
" method='POST'>
                                    <fieldset>
                                      <div class="form-group">
                                        <div class="input-group">
                                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                        
                                          <input id="emailInput" placeholder="e-mail" class="form-control" type="email"  required name='email'>
                                        
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <input class="btn btn-lg btn-primary btn-block" value="Demander mon mot de passe " type="submit">
                                      </div>
                                    </fieldset>
                                  </form>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
}
