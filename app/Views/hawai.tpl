{extends file='base/layout.tpl'}
{block name=content}
<div class="container ">
    <!-- locate -->
    <div class="row " aria-label="breadcrumb ">
        <ol class="breadcrumb ">
            <li>Vous ete ici: </li>
            <li class="breadcrumb-item ">
                <a href="../index.html " class="text-black ">
                    Accueil
                </a>
            </li>
            <li class="breadcrumb-item ">
                <a href="# " class="text-black ">
                    Nos hotels
                </a>
            </li>
            <li class="breadcrumb-item ">
                <a href="# " class="text-black ">
                    Suisse
                </a>
            </li>
        </ol>
    </div>
</div>

<article>
    <h1>Hotel Aloardis</h1>
    <div class="container-fluid ">
        <img class="image_suisse"src="{base_url('assets/Images/hawai.hawaipng')}" alt="image suisse hotel">
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
            <p>Notre hôtel Aloardis à 5 étoiles se situe en a Hawai , plus précisément à Waikiki Beach, la nuit est <span style="color:#ff00aa ;">à partir de 500 €</span>.</p>
            <p>L'hôtel est situé a quelques pas de la mere : amoureux en lune de miel , cet hôtel est pour vous! Cette hôtel a 10 chambres avec uniquement des lits deux places .</p>
            <a href="../galerie_photo.html" class=" btn galerie_photo ">Galerie_photo</a>
        </div>
        
        <div class="presentation ">
            <p>Pour les activités , nous vous proposont une balade en bateau , nager avec les dauphins et une visite de l'île en avion.</p>
            <a href="../reservation.html" class=" btn reserver-btn  ">Réserver</a>
        </div>
    </div>
</article>
{/block}