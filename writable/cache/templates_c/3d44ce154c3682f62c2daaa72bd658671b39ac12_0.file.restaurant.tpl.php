<?php
/* Smarty version 4.0.4, created on 2022-02-15 03:31:32
  from 'C:\wamp64\www\ardis\app\Views\restaurant.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_620b72f4a2d272_57106296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d44ce154c3682f62c2daaa72bd658671b39ac12' => 
    array (
      0 => 'C:\\wamp64\\www\\ardis\\app\\Views\\restaurant.tpl',
      1 => 1644853104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620b72f4a2d272_57106296 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210676845620b72f4a1f531_35431666', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/layout.tpl');
}
/* {block 'content'} */
class Block_210676845620b72f4a1f531_35431666 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_210676845620b72f4a1f531_35431666',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- title  -->
    <h1>Nos menus</h1>


    <!-- section avec les chaque menu  -->
    <section>
        <img src="<?php echo base_url('assets/Images/resto1.webp');?>
" alt="menu_enfant" class="menu_enfant_image">
        <img src="<?php echo base_url('assets/Images/restaurant-01-plat.webp');?>
" alt="menu viande" class="menu_jour_image">
        <img src="<?php echo base_url('assets/Images/resto_vegeterien.webp');?>
" alt=" menu vegeterien" class="menu_vegeterien_image">
        <article class="menu_enfant">
            <div class="container">
                <div class="row">
                    <h4 class="menu_enfant_titre">Menu enfant</h4>
                    <p class="menu_enfant_prix">Prix: 5.99 <i class="fas fa-euro-sign"></i></p>
                    <p class="menu_enfant-paragraphe">
                        Le menu enfant comporte une viande ou un
                        poisson avec accompagnement au choix
                        (légumes de saison, féculents) et un dessert au
                        chocolat ou aux fruits réalisé par notre pâtissier
                        Ce menu servi à la demande est servi aux
                        enfants de moins de 12 ans et permet à
                        l'ensemble de la table ou du groupe de passer
                        un agréable moment culinaire.
                    </p>
                </div>
            </div>
        </article>

        <article class="menu_jour">
            <div class="container">
                <div class="row">
                    <h4 class="menu_jour_titre">Menu du jour</h4>
                    <p class="menu_jour_prix">Prix: 9.99 <i class="fas fa-euro-sign"></i></p>
                    <p class="menu_jour_paragraphe">
                        Le menu jour de l'an comporte des œufs de poule surprise Nougat de foie gras glacé au jus de canard et
                        Clémentine Noix de Saint-Jacques de Dieppe poêlées / endives à la carbonara jus court Filet de perdreau 
                        cuisiné en canapé et glacé au porto.
                    </p>
                </div>
            </div>
        </article>

        <article class='menu_vegeterien'>
            <div class="container">
                <div class="row">
                    <h4 class="menu_vegeterien_titre">Menu vegeterien</h4>
                    <p class="menu_vegeterien_prix">Prix: 5.82 <i class="fas fa-euro-sign"></i></p>
                    <p>
                    Cette recette végétarienne
                    gastronomique est également vegan.
                    La sauce au cresson est réalisée à
                    base de noix de cajou qui lui ajoute
                    du corps, le condiment d’estragon et
                    amandes grillées donne de la texture
                    tandis que les pommes de terre rôties
                    offrent fondant et douceur.
                </p>
                </div>
            </div>
        </article>
    </section>
<?php
}
}
/* {/block 'content'} */
}
