<?php
/* Smarty version 4.0.4, created on 2022-02-10 12:54:07
  from '/var/www/html/ardis/app/Views/create_account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_62055f4f2c1273_49743729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b2d982596ba62decbbe4f4b521c035b02d21150' => 
    array (
      0 => '/var/www/html/ardis/app/Views/create_account.tpl',
      1 => 1644519234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62055f4f2c1273_49743729 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95506782762055f4f2c0362_11990489', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/layout.tpl');
}
/* {block 'content'} */
class Block_95506782762055f4f2c0362_11990489 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_95506782762055f4f2c0362_11990489',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   
   <section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 well well-sm sign_up">
                <legend><a href="http://www.jquery2dotnet.com"><i class="glyphicon glyphicon-globe"></i></a> S'inscrire !</legend>
                <form action="#" method="post" class="form" role="form">
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <input class="form-control" name="firstname" placeholder="Prénom" type="text"
                            required autofocus />
                    </div>
                    <div class="col-xs-6 col-md-6">
                        <input class="form-control" name="lastname" placeholder="Nom" type="text" required />
                    </div>
                </div>
                <input class="form-control" name="email" placeholder="Email" type="email" />
                <input class="form-control" name="password" placeholder="Mot de passe" type="password" />
                <input class="form-control" name="Confirm_password" placeholder="Confirmation du mot de passe" type="password" />
                <br />
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Envoyer</button>
                </form>
            </div>
        </div>
    </div>
   </section>
<?php
}
}
/* {/block 'content'} */
}
