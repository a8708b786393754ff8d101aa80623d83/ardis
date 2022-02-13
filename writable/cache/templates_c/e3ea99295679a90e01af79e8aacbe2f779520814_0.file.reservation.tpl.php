<?php
/* Smarty version 4.0.4, created on 2022-02-13 12:01:38
  from '/var/www/html/ardis/app/Views/reservation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_62094782330c84_71638034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3ea99295679a90e01af79e8aacbe2f779520814' => 
    array (
      0 => '/var/www/html/ardis/app/Views/reservation.tpl',
      1 => 1644775272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62094782330c84_71638034 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74229361362094782330459_75700820', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/layout.tpl');
}
/* {block 'content'} */
class Block_74229361362094782330459_75700820 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_74229361362094782330459_75700820',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container ">
        <div class="row " aria-label="breadcrumb ">
            <ol class="breadcrumb">
                <p>Vous ete ici: </p>
                <li class="breadcrumb-item"><a class='text-black' href="index.html">Acceuil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Reserver</li>
            </ol>
        </div>
    </div>



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
