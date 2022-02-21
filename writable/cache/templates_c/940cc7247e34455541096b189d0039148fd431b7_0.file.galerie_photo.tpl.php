<?php
/* Smarty version 4.0.4, created on 2022-02-21 03:58:13
  from 'C:\MAMP\htdocs\ardis\app\Views\galerie_photo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_62136235b61cc6_01980716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '940cc7247e34455541096b189d0039148fd431b7' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\ardis\\app\\Views\\galerie_photo.tpl',
      1 => 1645437491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62136235b61cc6_01980716 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106606535062136235b5d492_11720517', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/layout.tpl');
}
/* {block 'content'} */
class Block_106606535062136235b5d492_11720517 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_106606535062136235b5d492_11720517',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section>
        <article>
            <h2 class="text-center">Dubai</h2>
            <img class="dubai_photos" src="<?php echo base_url('assets/Images/hotel-desert-dubai.png');?>
" alt="dubai_photo_terrase">
            <img class="dubai_photos" src="<?php echo base_url('assets/Images/istockphoto-182404406-170667a.jpg');?>
" alt="dubia_photo">
            <img class="dubai_photos" src="<?php echo base_url('assets/Images/istockphoto-512882668-170667a.jpg');?>
" alt="dubai_room">
            <img class="dubai_photos" src="<?php echo base_url('assets/Images/bar.png');?>
" alt="bar_dubai">
        </article>

        <article>
            <h2 class="text-center">Punta cana</h2>
            <img class="punta_cana" src="<?php echo base_url('assets/Images/photo-1563911302283-d2bc129e7570.png');?>
" alt="punta_cana">
            <img class="punta_cana" src="<?php echo base_url('assets/Images/photo-1571003123894-1f0594d2b5d9.png');?>
" alt="punta_cana">
            <img class="punta_cana" src="<?php echo base_url('assets/Images/photo-1618773928121-c32242e63f39.png');?>
" alt="punta_cana">
            <img class="punta_cana" src="<?php echo base_url('assets/Images/resto.jpg');?>
" alt="resto_punta_cana">
        </article>

        <article>
            <h2 class="text-center">Suisse/ Tubehral</h2>
            <img class="suisse_photos" src="<?php echo base_url('assets/Images/images2.png');?>
" alt="hotel apladris">
            <img class="suisse_photos" src="<?php echo base_url('assets/Images/montagne_room.jpg');?>
" alt="suisse_room">
            <img class="suisse_photos" src="<?php echo base_url('assets/Images/luge.png');?>
" alt="luge_suisse">
        </article>
    </section>
<?php
}
}
/* {/block 'content'} */
}
