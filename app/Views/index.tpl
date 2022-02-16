{extends file='base/layout.tpl'}
{block name='content'}
 <!-- reservation -->
    <div class=" form-reservation position-absolute top-50 start-50 translate-middle">
        <div class="row bg-transparent">
            <h1 class="text-center text-white">Decouvrez nos hotels <br> sur tout les climats...</h1>
            <form class="form-control bg-transparent reservation">
                <label for="reservation" class="text-white">Du:</label>
                <input type="date" class="">
                <label for="reservation" class="text-white">Au:</label>
                <input type="date" class="">
                <input type="submit" name="sub" class="btn-dark" value="chercher">
            </form>
        </div>
    </div>

    <i class="fas fa-arrow-down"></i>

    <!-- partie meuilleur hotel/prix -->
    <section>
        <h2 class="text-center presentation_hotel">Nos meuilleur hotel avec les meuilleur prix</h2>
        <div class="card-group">
        {if $element}
            {foreach from=$element  key=key item=item}                
                <div class="card">
                    <img src="{base_url('assets/Images/')|cat:'/'|cat:$item->hotel_nom|cat:'.webp'}" class="d-block mx-auto" alt="hotel_punt_cana" width="200px">
                    <div class="card-body text-center">
                        <h5 class="card-title"><a href="{base_url('pages/{$item->hotel_nom|lower}')}">{$item->hotel_ville}</a></h5>
                        <p class="card-text ">Hotel ardis {$item->hotel_nom}</p>
                        <p style="color: #ff00aa ;" class="card-text ">a partir de {$item->hotel_price}€</p>
                    </div>
                </div>
            {/foreach}
        {/if}
        </div>
        <div class="container">
            <div class="d-grid gap-2 d-md-block">
                <a href="{base_url('#')}" class="btn">Pour en savoir plus</a>
            </div>
        </div>
    </section>
{/block}