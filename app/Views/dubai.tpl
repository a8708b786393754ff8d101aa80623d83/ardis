{extends file='base/layout.tpl'}
{block name=content}
    
<article>
    <div class="container-fluid ">
        <img class="image_dubai img-fluid" src="{base_url('assets/Images')|cat:'/'}{$name_file|capitalize|cat:'.webp'}" alt="image dubai">
        <i class="fa-solid fa-envelope"></i>
        <div class="row ">
            <div class="notes">
                <h1 class="title">Hotel ardis Dubai</h1>
                <i class="fas fa-map-marker-alt "></i>
                <p class="city_hotel ">Dubai</p>
                <div class="start ">
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                </div>
            </div>
            <div class="localisation_hotel">
            <p class=".text-center-sm">L'hôtel se trouve à Dubaï. si aiment les climats chauds et le desert, dans notre hôtel vous seriez au bon endroit.La nuit est <span style="color:#ff00aa ;">à partir de 320 €</span>.</p>
            <p class=".text-center-sm">L'hôtel est assez proche pour voit les tempêtess de sable arriver, ces tempêtes ne sont pas dangereux .Cet hôtel 5 étoiles à 5 ilots et dans un chaque ilot il y a 1 grand lit pour 2 personnes, ce séjour-là c'est fait pour les amoureux. Les sorties sont organisées selon vos envies, vous pouvez visiter la ville ou vous se balader en chameaux.</p>
            <a href="../galerie_photo.html" class=" btn galerie_photo ">Galerie_photo</a>
        </div>
        
        <div class="presentation ">
            <p class=".text-center-sm">L'hôtel est luxueux est bien assez proche de la mer. Cet hôtel 4 étoiles à 18 chambres à 4 lits chacune, 10 chambres à 2 lits.</p>
            <p class=".text-center-sm">Les sorites sont organisés selon vos envies, vous pouvez visiter le phare de bayahibe ou vous baigner dans Hoyo Azul.</p>
            <a href="../reservation.html" class=" btn reserver-btn ">Réserver</a>
        </div>
    </div>

</article>
{/block}