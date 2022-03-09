<?php
/* Smarty version 4.0.4, created on 2022-03-09 15:40:35
  from '/var/www/html/ardis/app/Views/recus.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_62291ed38591f6_96134362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0de7461e2374045c3f2a83650cb73952c1372707' => 
    array (
      0 => '/var/www/html/ardis/app/Views/recus.tpl',
      1 => 1646862008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62291ed38591f6_96134362 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145518038962291ed3854479_93488800', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/layout.tpl');
}
/* {block 'content'} */
class Block_145518038962291ed3854479_93488800 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_145518038962291ed3854479_93488800',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ((isset($_SESSION['pseudo']))) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['msg_succes']->value))) {?>
        <table class="body-wrap">
    <tbody><tr>
        <td></td>
        <td class="container" width="600">
            <div class="content">
                <table class="main" width="100%" cellpadding="0" cellspacing="0">
                    <tbody><tr>
                        <td class="content-wrap aligncenter">
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tbody><tr>
                                    <td class="content-block">
                                    <div class="alert alert-success" role="alert">
                                        <h2>Merci d'avoir choisi Ardis</h2>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        <table class="invoice">
                                            <tbody><tr>
                                                <td><?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
   <?php echo $_smarty_tpl->tpl_vars['prenom']->value;?>

                                                <br> Hotel de séjours : <?php echo $_smarty_tpl->tpl_vars['hotel_sejour']->value;?>

                                                <br> Date de séjour : <?php echo $_smarty_tpl->tpl_vars['startdate']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['enddate']->value;?>

                                                <br> Durée du séjour : <?php echo $_smarty_tpl->tpl_vars['durer']->value;?>
 jours
                                                <br> Nombr de lits loué : <?php echo $_smarty_tpl->tpl_vars['nb_lit']->value;?>

                                                <br> Numero chambre : <?php echo $_smarty_tpl->tpl_vars['nb_chambre']->value;?>

                                            </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table class="invoice-items" cellpadding="0" cellspacing="0">
                                                        <tbody>
                                                        <?php if ($_smarty_tpl->tpl_vars['activiter']->value != 'non') {?>
                                                        <tr>
                                                            <td>Activité</td>
                                                            <td class="alignright"><?php echo $_smarty_tpl->tpl_vars['activiter_price']->value;?>
 €</td>
                                                        </tr>
                                                        <?php }?>
                                                       
                                                        <tr class="total">
                                                            <td class="alignright">Prix total: <span><?php echo $_smarty_tpl->tpl_vars['price_total']->value;?>
 €</span> </td>
                                                        </tr>
                                                    </tbody></table>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                    </td>
                                </tr>
                            </tbody></table> 
                        </td>
                    </tr>
                </tbody></table>
        </td>
        <td></td>
    </tr>
</tbody></table>
<?php } elseif ((isset($_smarty_tpl->tpl_vars['msg_error']->value))) {?>
<div class='container'>
    <div class='row'>
        <div class="alert alert-danger" role="alert">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msg_error']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <?php echo $_smarty_tpl->tpl_vars['item']->value;?>
.
                <br>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</div>
<?php }
} else { ?>
    <div class='container'>
        <div class='row'>
            <div class="alert alert-danger" role="alert">
                Vous devez vous connecter pour effectuer une reservation.
                <a href="<?php echo base_url('visitor/create_account');?>
" class="btn btn-primary">Crée un compte</a>
                <a href="<?php echo base_url('visitor/login');?>
" class="btn btn-primary">Se connecter</a>
            </div>
        </div>
    </div>
<?php }
}
}
/* {/block 'content'} */
}
