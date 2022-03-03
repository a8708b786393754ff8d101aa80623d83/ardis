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
                        <i class="fa-solid fa-star start-icone"></i>
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
  <h3 class='text-center'>Partager l'hotel a un proche.</h3>
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
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
      </div>
    </form>
  </div>
</div>
{/block}