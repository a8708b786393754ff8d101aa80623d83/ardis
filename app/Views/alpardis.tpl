{extends file='base/layout.tpl'}
{block name=content}

<article>
    <h1>Hotel alpardis</h1>
    <div class="container-fluid ">
        <img class="image_suisse"src="{base_url('assets/Images')|cat:'/'}{$name_file|capitalize|cat:'.webp'}" alt="image suisse hotel">
        <i class="fa-solid fa-envelope"></i>
        <div class="row ">
            <i class="fas fa-map-marker-alt gps_icone "></i>
            <p class="city_hotel ">Suisse/ Turbenthal</p>
            <div class="start ">
                <i class="fas fa-star "></i>
                <i class="fas fa-star "></i>
                <i class="fas fa-star "></i>
            </div>
            <div class="localisation_hotel ">
            <p>Notre hôtel alpadris à 3 étoiles se situe en Suisse, plus précisément à Turbenthal, la nuit est <span style="color:#ff00aa ;">à partir de 100 €</span>.</p>
            <p>L'hôtel est situé dans les alpes, pour les amoureux de la neige est des montagnes, cet hôtel est pour vous. Par notre qualité de service nous sommes à top ! Il y a 5 étages et 10 chambres, 5 a deux lits et 10 pour 4 lits.</p>
            <a href="../galerie_photo.html" class=" btn galerie_photo ">Galerie_photo</a>
        </div>
        
        <div class="presentation ">
            <p>Pour les activités, nous vous proposerons du ski et de la luge et une visite guide dû la chocolaterie Lindt.</p>
            <a href="../reservation.html" class=" btn reserver-btn  ">Réserver</a>
        </div>
    </div>
</article>
{/block}