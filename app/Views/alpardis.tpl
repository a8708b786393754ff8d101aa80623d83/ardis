{extends file='base/layout.tpl'}
{block name=content}
<article>
    <h1>Hotel {$hotel_info[0]->hotel_nom}</h1>
    <div class="container-fluid ">
        <img class="image_{$hotel_info[0]->hotel_nom}" src="{base_url('assets/Images/nos_hotels')|cat:'/'}{$hotel_info[0]->hotel_image}" alt="image {$hotel_info[0]->hotel_nom} hotel">
        {* <i class="fa-solid fa-envelope"></i> *}
        <div class="row ">
            <i class="fas fa-map-marker-alt gps_icone "></i>
            <p class="city_hotel ">{$hotel_info[0]->hotel_pays}/ {$hotel_info[0]->hotel_ville}</p>
            <div class="start ">
                {for $foo=1 to $hotel_info[0]->hotel_note}
                    <i class="fas fa-star "></i>
                {/for}
            </div>
            <div class="localisation_hotel ">
            <p>{$hotel_info[0]->hotel_contenue}</p>
            <p>A partir de <span styl='color: purple;'>{$hotel_info[0]->hotel_price}€</span></p>
            <a href="{base_url('galerie_photo')}" class=" btn galerie_photo ">Galerie_photo</a>
        </div>
        
        <div class="presentation ">
            <p>Pour les activités, nous vous proposerons du ski et de la luge et une visite guide dû la chocolaterie Lindt.</p>
            <a href="{base_url('reserver')}" class=" btn reserver-btn  ">Réserver</a>
        </div>
    </div>
</article>
{/block}