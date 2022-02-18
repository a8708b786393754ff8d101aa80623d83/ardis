<?php
/* Smarty version 4.0.4, created on 2022-02-18 04:18:28
  from '/var/www/html/ardis/app/Views/profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_620f7274bd4b00_14285881',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2aede7db75b42c6d96ccf0200c008c09990add2f' => 
    array (
      0 => '/var/www/html/ardis/app/Views/profile.tpl',
      1 => 1645179507,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620f7274bd4b00_14285881 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_431254931620f7274bd3ed3_30644758', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/layout.tpl');
}
/* {block 'content'} */
class Block_431254931620f7274bd3ed3_30644758 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_431254931620f7274bd3ed3_30644758',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
    <div class="card p-4">
    <?php echo $_smarty_tpl->tpl_vars['pseudo']->value;?>

        <div class=" image d-flex flex-column justify-content-center align-items-center"> <button class="btn btn-secondary"> <img src="https://i.imgur.com/wvxPV9S.png" height="100" width="100" /></button> <span class="name mt-3">Nom prenom</span>
            <div class=" d-flex mt-2"> <a href='login'class="btn btn1 btn-dark">Modier profile</a> </div>
            <div class="container">
                <div class="row">
                    <p>Nom prenom: </p>
                    <p>Pseudo: </p>
                    <p>Adresses de facturation: (adresses + pays)</p>
                    <p>Votre email: </p>
                    <p>Votre numero de telephone</p>
                    <p></p>
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
