<?php
/* Smarty version 4.0.4, created on 2022-02-16 08:03:32
  from '/var/www/html/ardis/app/Views/reservation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_620d04346f45f9_76511029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3ea99295679a90e01af79e8aacbe2f779520814' => 
    array (
      0 => '/var/www/html/ardis/app/Views/reservation.tpl',
      1 => 1645020193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620d04346f45f9_76511029 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1578573889620d04346f37b1_26183430', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/layout.tpl');
}
/* {block 'content'} */
class Block_1578573889620d04346f37b1_26183430 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1578573889620d04346f37b1_26183430',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <div class="row">
            <div class="reservation">
                <h2>Reserver dés maintenant !! </h2>
                <div class="destination">
                    <label for="reservation">Hotel de destinations: </label>
                    <select name="reservation">
                        <option value="punta_cana">Hotel ardis Sampatico (Punta cana)</option>
                        <option value="dubai">Hotel ardis Dubai</option>
                        <option value="suisse">Hotel alpardis (suisse) </option>
                    </select>
                </div>
                <div class="date">
                    Du: <input type="date">
                    AU: <input type="date">
                </div>

                <div class="nombre_voyager">
                    <input type="numbre" placeholder="Nombre de voyageurs">
                </div>
            <input type="submit" class="btn" value="reserver">
          </div>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
}
