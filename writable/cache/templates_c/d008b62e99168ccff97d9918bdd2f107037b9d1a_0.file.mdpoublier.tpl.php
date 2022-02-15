<?php
/* Smarty version 4.0.4, created on 2022-02-14 09:54:03
  from 'C:\wamp64\www\ardis\app\Views\mdpoublier.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_620a7b1b1379d6_71473004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd008b62e99168ccff97d9918bdd2f107037b9d1a' => 
    array (
      0 => 'C:\\wamp64\\www\\ardis\\app\\Views\\mdpoublier.tpl',
      1 => 1644853104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620a7b1b1379d6_71473004 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_218362716620a7b1b1328d7_61853176', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/layout.tpl');
}
/* {block 'content'} */
class Block_218362716620a7b1b1328d7_61853176 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_218362716620a7b1b1328d7_61853176',
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
                              <h2 class="text-center">Mot de passe oublié  ?</h2>
                              <p>Demandez votre de mot de passe .</p>
                                <div class="panel-body">
                                  
                                  <form class="form">
                                    <fieldset>
                                      <div class="form-group">
                                        <div class="input-group">
                                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                        
                                          <input id="emailInput" placeholder="e-mail" class="form-control" type="email" oninvalid="setCustomValidity('Merci de mettre un e-mail valide.')" onchange="try{setCustomValidity('')}catch(e){}" required="">
                                        
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
