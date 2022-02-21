{extends file='base/layout.tpl'}
{block name=content}
<article>
    <div class="container-fluid ">
        <img class="image_{$name}" src="{base_url('assets/Images/nos_hotels')|cat:'/'}{$image}" alt="image {$name} hotel">
        {* <i class="fa-solid fa-envelope"></i> *}
        <div class="row ">
            <h1>Hotel {$name}</h1>
            <i class="fas fa-map-marker-alt gps_icone "></i>
            <p class="city_hotel ">{$pays}/ {$ville}</p>
            <div class="start ">
                {for $foo=1 to $note}
                    <i class="fas fa-star "></i>
                {/for}
            </div>
            <div class="localisation_hotel ">
            <p>{$contenue}</p>
            <p>A partir de <span style='color: #ff00aa;'>{$price}€</span></p>
            <a href="{base_url('galerie_photo')}" class=" btn galerie_photo ">Galerie_photo</a>
        </div>
        
        <div class="presentation ">
            <p>Pour les activités, nous vous proposerons du ski et de la luge et une visite guide dû la chocolaterie Lindt.</p>
            <a href="{base_url('reserver')}" class=" btn reserver-btn  ">Réserver</a>
        </div>
    </div>
</article>
{/block}