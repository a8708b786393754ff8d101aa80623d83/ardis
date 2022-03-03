{extends file='base/layout.tpl'}
{block name=content}
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
  {if isset($msg_succes)}
    <div class="alert alert-success" role="alert">
      {$msg_succes}
    </div>
    {if isset($msg_error)}
      <div class="alert alert-danger" role="alert">
        {$msg_error}
      </div>
    {/if}
  {/if}
  <hr>
  <h3 class='text-center'>Partager l'hotel a un proche.</h3>
    <form action='{base_url('hotels/email')|cat:'/'}' method="POST">
      <div class="form-group">
        <label>Nom</label>
        <input type="text" name="nom" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" name="mailTo" class="form-control" required>
      </div> 
      <div class="form-group">
        <label>Object</label>
        <input type="text" name="subject" class="form-control" required value="{$object_prefixed}">
      </div>
      <div class="form-group">
        <label>Message</label>
        <pre>
        <textarea rows="20" type="text" name="message" class="form-control" required>
            {$msg_prefixed}
            </textarea>
        </pre>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
      </div>
    </form>
  </div>
{/block}