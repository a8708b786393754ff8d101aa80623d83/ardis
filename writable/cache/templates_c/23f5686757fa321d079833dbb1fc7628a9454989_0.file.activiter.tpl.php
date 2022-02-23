<?php
/* Smarty version 4.0.4, created on 2022-02-23 06:57:27
  from 'C:\wamp64\www\ardis\app\Views\activiter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_62162f3783b904_77105723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23f5686757fa321d079833dbb1fc7628a9454989' => 
    array (
      0 => 'C:\\wamp64\\www\\ardis\\app\\Views\\activiter.tpl',
      1 => 1645621047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62162f3783b904_77105723 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125680722462162f378229a5_60061607', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/layout.tpl');
}
/* {block 'content'} */
class Block_125680722462162f378229a5_60061607 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_125680722462162f378229a5_60061607',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img  src="<?php echo base_url('assets/Images/activiter/plages-surf.jpg');?>
" class="d-block img " alt="..." width='800' height='500'>
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/Images/activiter/plages-surf.jpg');?>
" class="d-block img " alt="..." width='800' height='500'>
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/Images/activiter/phare.png');?>
" class="d-block img " alt="..." width='800' height='500'>
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<?php
}
}
/* {/block 'content'} */
}
