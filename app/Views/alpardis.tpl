{extends file='base/layout.tpl'}
{block name=content}
{if isset($msg_success_avis)}
<div class="alert alert-success" role="alert">
  Votre avis a ete pris en compte.
</div>
{elseif isset($msg_error_avis)}
<div class="alert alert-danger" role="alert">
  {foreach from=$msg_error_avis item=item}
    {$item}
  {/foreach}
</div>
{/if}
<article>
    <div class="container-fluid ">
        <img class="image_{$name}" src="{base_url('assets/Images/nos_hotels')|cat:'/'}{$image}" alt="image {$name} hotel">
        <div class="row ">
            <div class="milieu ">
                <h1>Hotel {$name}</h1>
                <i class="fas fa-map-marker-alt gps_icone star "></i>
                <p class="city_hotel ">{$pays}/ {$ville}</p>
                <div class="start ">
                    {for $foo=1 to $note}
                      <i class="fas fa-star "></i>
                    {/for}
                </div>
                <div class="localisation_hotel ">
                      <p class='contenue'>{$contenue}</p>
                    <p>A partir de <span style='color: #ff00aa;'>{$price}€</span></p>
                    <a href="{base_url('galerie_photo')}" class=" btn galerie_photo ">Galerie_photo</a>
                </div>
                 <div class="presentation ">
            <p>Pour les activités, nous vous proposerons du ski et de la luge et une visite guide dû la chocolaterie Lindt.</p>
            <a href="{base_url('reserver')}" class=" btn reserver-btn  ">Réserver</a>
        </div>
            </div>
        </div>
    </div>
</article>

 <div class="container mt-5">
  <hr>
  <h3 class='text-center'>Partager l'hotel.</h3>
     <form method="post" action="{base_url('Hotel/sendMail')}">
      <div class="form-group">
        <label>Destinateur</label>
        <input type="text" name="mailTo" class="form-control">
      </div>
       
      <div class="form-group">
        <label>Objet</label>
        <input type="text" name="subject" class="form-control" value="{$object_prefixed}">
      </div>
      <div class="form-group">
        <label>Message</label>
        <pre>
          <textarea rows="6" type="text" name="message" class="form-control">
            {$msg_prefixed}
          </textarea>
        </pre>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Envoyer</button>
      </div>
    </form>
  </div>
</div>

{if isset($smarty.session.pseudo)}
 <div class="container mt-5">
  <hr>
  <h3 class='text-center'>Ajouter un avis</h3>

     <form method="post" action="{base_url('Hotel/addAvis/')|cat:'/'}{$name_file|capitalize}" 
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
{/if}
{literal}
  <script> 
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
  
  </script>
{/literal}
{/block}