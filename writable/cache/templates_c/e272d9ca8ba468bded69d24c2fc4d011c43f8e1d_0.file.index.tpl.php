<?php
/* Smarty version 4.0.4, created on 2022-02-10 10:01:03
  from 'C:\MAMP\htdocs\ardis\app\Views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_620536bfac5da0_12715017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e272d9ca8ba468bded69d24c2fc4d011c43f8e1d' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\ardis\\app\\Views\\index.tpl',
      1 => 1644508860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620536bfac5da0_12715017 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_434672369620536bfac5554_11433794', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block "content"} */
class Block_434672369620536bfac5554_11433794 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_434672369620536bfac5554_11433794',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 <!-- reservation -->
    <div class=" form-reservation position-absolute top-50 start-50 translate-middle">
        <div class="row bg-transparent">
            <h1 class="text-center text-white">Decouvrez nos hotels <br> sur tout les climats...</h1>
            <form class="form-control bg-transparent reservation">
                <label for="reservation" class="text-white">Du:</label>
                <input type="date" class="">
                <label for="reservation" class="text-white">Au:</label>
                <input type="date" class="">
                <input type="submit" name="sub" class="btn-dark" value="chercher">
            </form>
        </div>
    </div>

    <i class="fas fa-arrow-down"></i>

    <!-- partie meuilleur hotel/prix -->
    <section>
        <h2 class="text-center presentation_hotel">Nos meuilleur hotel avec les meuilleur prix</h2>
        <div class="card-group">
            <div class="card">
                <img src="assets/Images/punta_cana/photo-1571003123894-1f0594d2b5d9.png" class="d-block mx-auto" alt="hotel_punt_cana" width="200px">
                <div class="card-body text-center">
                    <h5 class="card-title"><a href="nos_hotel/punta_cana.html">Punta cana</a></h5>
                    <p class="card-text ">Hotel ardis Sampatico</p>
                    <p style="color: #ff00aa ;" class="card-text ">a partir de 250€</p>
                </div>
            </div>
            <div class="card">
                <img src="assets/Images/dubai/hotel-desert-dubai.png" class="card-img-top d-block mx-auto" alt="hotel_dubai">
                <div class="card-body">
                    <h5 class="card-title"><a href="nos_hotel/dubai.html">Dubai</a></h5>
                    <p class="card-text text-start">Hotel ardis dubai</p>
                    <p style="color: #ff00aa;" class="card-text text-start">a partir de 320€</p>
                </div>
            </div>
            <div class="card">
                <img src="assets/Images/suisse/images2.png" class="card-img-top d-block mx-auto" alt="hotel_suisse">
                <div class="card-body">
                    <h5 class="card-title"><a href="nos_hotel/suisse.html">Suisse</a></h5>
                    <p class="card-text text-start">Hotel ardis Sampatico</p>
                    <p style="color: #ff00aa ;" class="card-text text-start">a partir de 100€</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="d-grid gap-2 d-md-block">
                <a href="nos_hotel/punta_cana.html" class="btn">Pour en savoir plus</a>
            </div>
        </div>
    </section>
<?php
}
}
/* {/block "content"} */
}
