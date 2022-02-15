<?php
/* Smarty version 4.0.4, created on 2022-02-15 03:14:19
  from '/var/www/html/ardis/app/Views/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_620b6eebdf83e7_27634616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b3d239811c101ba7293c5759faa6225e27dae72' => 
    array (
      0 => '/var/www/html/ardis/app/Views/index.tpl',
      1 => 1644776290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620b6eebdf83e7_27634616 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1619467895620b6eebdf6287_20855347', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/layout.tpl');
}
/* {block 'content'} */
class Block_1619467895620b6eebdf6287_20855347 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1619467895620b6eebdf6287_20855347',
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
                <img src="<?php echo base_url('assets/Images/punta_cana/photo-1571003123894-1f0594d2b5d9.png');?>
" class="d-block mx-auto" alt="hotel_punt_cana" width="200px">
                <div class="card-body text-center">
                    <h5 class="card-title"><a href="<?php echo base_url('punta_cana.tpl');?>
">Punta cana</a></h5>
                    <p class="card-text ">Hotel ardis Sampatico</p>
                    <p style="color: #ff00aa ;" class="card-text ">a partir de 250€</p>
                </div>
            </div>
            <div class="card">
                <img src="<?php echo base_url('assets/Images/dubai/hotel-desert-dubai.png');?>
" class="card-img-top d-block mx-auto" alt="hotel_dubai">
                <div class="card-body">
                    <h5 class="card-title"><a href="<?php echo base_url('dubai.tpl');?>
">Dubai</a></h5>
                    <p class="card-text text-start">Hotel ardis dubai</p>
                    <p style="color: #ff00aa;" class="card-text text-start">a partir de 320€</p>
                </div>
            </div>
            <div class="card">
                <img src="<?php echo base_url('assets/Images/suisse/images2.png');?>
" class="card-img-top d-block mx-auto" alt="hotel_suisse">
                <div class="card-body">
                    <h5 class="card-title"><a href="<?php echo base_url('suisse.tpl');?>
">Suisse</a></h5>
                    <p class="card-text text-start">Hotel ardis Sampatico</p>
                    <p style="color: #ff00aa ;" class="card-text text-start">a partir de 100€</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="d-grid gap-2 d-md-block">
                <a href="<?php echo base_url('punta_cana.tpl');?>
" class="btn">Pour en savoir plus</a>
            </div>
        </div>
    </section>
<?php
}
}
/* {/block 'content'} */
}
