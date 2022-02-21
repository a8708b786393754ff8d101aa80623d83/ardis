<?php
/* Smarty version 4.0.4, created on 2022-02-21 07:20:50
  from 'C:\MAMP\htdocs\ardis\app\Views\profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_621391b25d1126_75862001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f59c9e22c75c105a462c94f1f195f77aa4e2f98' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\ardis\\app\\Views\\profile.tpl',
      1 => 1645449650,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_621391b25d1126_75862001 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
if ((isset($_SESSION['pseudo'])) && (isset($_SESSION['id']))) {?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1012169803621391b25d0780_09349813', 'content');
?>

<?php }
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/layout.tpl');
}
/* {block 'content'} */
class Block_1012169803621391b25d0780_09349813 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1012169803621391b25d0780_09349813',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
        <div class="card p-4">
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
