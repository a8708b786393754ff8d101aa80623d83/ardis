<?php
/* Smarty version 4.0.4, created on 2022-03-07 07:18:57
  from '/var/www/html/ardis/app/Views/aloardis.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_62260641512a67_21198921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eaa8023708b7b5be570a553acd0b4299407b8335' => 
    array (
      0 => '/var/www/html/ardis/app/Views/aloardis.tpl',
      1 => 1646659037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62260641512a67_21198921 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12285418236226064150c612_58888296', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/layout.tpl');
}
/* {block 'content'} */
class Block_12285418236226064150c612_58888296 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12285418236226064150c612_58888296',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/ardis/app/ThirdParty/smarty/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
?>

<?php if ((isset($_smarty_tpl->tpl_vars['msg_success_avis']->value))) {?>
<div class="alert alert-success" role="alert">
  Votre avis a ete pris en compte.
</div>
<?php } elseif ((isset($_smarty_tpl->tpl_vars['msg_error_avis']->value))) {?>
<div class="alert alert-danger" role="alert">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msg_error_avis']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
    <?php echo $_smarty_tpl->tpl_vars['item']->value;?>

  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }?>
<article>
    <div class="container-fluid ">
        <img class="image_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" src="<?php echo (base_url('assets/Images/nos_hotels')).('/');
echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="image <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 hotel">
        <div class="row ">
            <div class="milieu ">
                <h1>Hotel <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h1>
                <i class="fas fa-map-marker-alt gps_icone star "></i>
                <p class="city_hotel "><?php echo $_smarty_tpl->tpl_vars['pays']->value;?>
/ <?php echo $_smarty_tpl->tpl_vars['ville']->value;?>
</p>
                <div class="start ">
                    <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['note']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['note']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
                      <i class="fas fa-star "></i>
                    <?php }
}
?>
                </div>
                <div class="localisation_hotel ">
                    <p class='contenue'><?php echo $_smarty_tpl->tpl_vars['contenue']->value;?>
</p>
                    <p>A partir de <span style='color: #ff00aa;'><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
€</span></p>
                    <a href="<?php echo base_url('galerie_photo');?>
" class=" btn galerie_photo ">Galerie_photo</a>
                </div>
                 <div class="presentation ">
            <p>Pour les activités, nous vous proposerons une Visite de L’île de Maui avec notre guide.</p>
            <a href="<?php echo base_url('reserver');?>
" class=" btn reserver-btn  ">Réserver</a>
        </div>
            </div>
        </div>
    </div>
</article>

 <div class="container mt-5">
  <hr>
  <h3 class='text-center'>Partager l'hotel a un proche.</h3>
     <form method="post" action="<?php echo base_url('Hotel/sendMail');?>
">
      <div class="form-group">
        <label>Destinateur</label>
        <input type="text" name="mailTo" class="form-control">
      </div>
       
      <div class="form-group">
        <label>Objet</label>
        <input type="text" name="subject" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['object_prefixed']->value;?>
">
      </div>
      <div class="form-group">
        <label>Message</label>
        <pre>
          <textarea rows="6" type="text" name="message" class="form-control">
            <?php echo $_smarty_tpl->tpl_vars['msg_prefixed']->value;?>

          </textarea>
        </pre>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Envoyer</button>
      </div>
    </form>
  </div>
</div>

<?php if ((isset($_SESSION['pseudo']))) {?>
 <div class="container mt-5">
  <hr>
  <h3 class='text-center'>Ajouter un avis</h3>

     <form method="post" action="<?php echo (base_url('Hotel/addAvis/')).('/');
echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['name_file']->value);?>
" 
                                                                                  enctype="multipart/form-data">
      <div class="form-group">
        <label>Titre: </label>
        <input type="text" name="title" class="form-control">
      </div>
      <div class="form-group">
        <input type="file" name="photo_avis_clients" class="form-control">
      </div>
      <div class="form-group">
        <label>Note: </label>
        <select name='note'>
          <option value='1'>1</option>
          <option value='2'>2</option>
          <option value='3'>3</option>
          <option value='4'>4</option>
          <option value='5'>5</option>
        </select>
      </div>
      <div class="form-group">
        <label>Message: </label>
          <textarea rows="6" type="text" name="message" class="form-control">
          </textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Envoyer</button>
      </div>
    </form>

  </div>
</div>
<?php }?>

  <?php echo '<script'; ?>
> 
    let allstart = document.querySelectorAll('.star'); 
    allstart.forEach( (element) =>{
        $(element).click(function(){
          let index_click = $(".star").index(element)
          for(let i=1; i <= index_click; i++){
            let class_element = $(allstart[i]).attr('class')            
              $(allstart[i]).addClass('gold'); 
          }
        })
    })
  
  <?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'content'} */
}
