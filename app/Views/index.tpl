{extends file='base/layout.tpl'}
{block name='content'}
 <!-- reservation -->
    <div class=" form-reservation position-absolute top-50 start-50 translate-middle">
        <div class="row bg-transparent">
            <h1 class="text-center text-white">Découvrez nos hôtels <br> sur tout les climats...</h1>
            <form class="form-search form-inline" method='POST' action='{base_url('/pages/search')}'>
                <div class="input-append text-black">
                    <input type="text" name='input' placeholder="Chercher un hotel, une activité" class="form-control"/>
                    <input type="submit" class="btn btn-dark" value='Rechercher'/>
                </div>
            </form>
        </div>
    </div>
    <i class="fas fa-arrow-down"></i>
    <section>
        <h2 class="text-center presentation_hotel"> Nos hôtels aux meilleurs prix</h2>
        <div class="card-group">
        {foreach from=$element  key=key item=item}
            <div class="card">
                <img src="{base_url('assets/Images/nos_hotels')|cat:'/'|cat:$item->hotel_image}" class="d-block mx-auto" alt="hotel_punt_cana" width="200px">
                <div class="card-body text-center">
                    <h5 class="card-title">{$item->hotel_ville}</h5>
                    <p class="card-text ">Hotel ardis {$item->hotel_nom}</p>
                    <p style="color: #ff00aa ;" class="card-text">à partir de {$item->hotel_price}€</p>
                    <a href="{base_url('hotel')|cat:'/'|cat:{$item->hotel_nom|lower}}" class='btn '>Pour en savoir plus</a>
                </div>
            </div>
        {/foreach}
        </div>
    </section>
{/block}