<?php
/* Smarty version 4.0.4, created on 2022-02-13 12:11:53
  from '/var/www/html/ardis/app/Views/recus.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_620949e98d4279_22826355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0de7461e2374045c3f2a83650cb73952c1372707' => 
    array (
      0 => '/var/www/html/ardis/app/Views/recus.tpl',
      1 => 1644775523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620949e98d4279_22826355 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_655301462620949e98d3c53_44563178', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/layout.tpl');
}
/* {block 'content'} */
class Block_655301462620949e98d3c53_44563178 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_655301462620949e98d3c53_44563178',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
                                        <h2>Merci d'avoir choisi Ardis</h2>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        <table class="invoice">
                                            <tbody><tr>
                                                <td>Kurt COBAIN
                                                <br>Compte client numéro : 2
                                                <br> Id réservation : 8
                                                <br> Hotel de séjours : Suisse
                                                <br> Date de séjour : 2021-05-12 / 2021-05-22 
                                                <br> Durée du séjour : 10 jours 
                                                <br> Nombr de chambre loué : 1
                                                <br> Id chambre : 8
                                            </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table class="invoice-items" cellpadding="0" cellspacing="0">
                                                        <tbody>
                                                            <tr>
                                                                <td>Prix séjours</td>
                                                                <td class="alignright">1000.00 € €</td>
                                                            </tr>
                                                            
                                                            
                                                            
                                                            <tr>
                                                            <td>Prix AR </td>
                                                            <td class="alignright">30.00 €</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Activité</td>
                                                            <td class="alignright">150.00 €</td>
                                                        </tr>
                                                       
                                                        <tr class="total">
                                                            <td class="alignright" width="80%">Total avec AR </td>
                                                            <td class="alignright">1 180.00 €</td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>Prix AR </td>
                                                            <td class="alignright">30.00 €</td>
                                                        </tr>
                                                        <tr class="total">
                                                            <td class="alignright" width="80%">Total sans  AR </td>
                                                            <td class="alignright">Prix total - 30% du prix total </td>
                                                            
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
<?php
}
}
/* {/block 'content'} */
}
