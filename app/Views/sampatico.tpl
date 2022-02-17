{extends file='base/layout.tpl'}
{block name=content}
<article>
    <div class="container-fluid ">
        <img class="image_hotel img-fluid"  src="{base_url('assets/Images/nos_hotels/')|cat:'/punta_cana'|cat:'.webp'}" alt="image punta_cana ">
        <i class="fa-solid fa-envelope"></i>
        <div class="row ">
           <div class="description">
                <h1 class="title">Hotel ardis Sampatico</h1>
                <i class="fas fa-map-marker-alt "></i>
                <p class="city_hotel ">Punta cana</p>
                <div class="start ">
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                </div>
           </div>
            <div class="localisation_hotel ">
            <p>L'hotel se trouve en République domicaine a Punta cana.La nuit est <span style="color:#ff00aa ;">à partir de 250€.</span></p>
            <p>Pour les amoureux des caraibe, cette hotel ce trouve a l'extremité de la mer de caraibe, avec une vue sur la mer est est les palmiers est le phare de bayahibe</p>
            <a href="../galerie_photo.html" class=" btn galerie_photo ">Galerie_photo</a>
        </div>
        
        <div class="presentation ">
            <p>L'hotel est luxueux est bien assez proche de la mer.Cette hotel 4 etoile a 18 chambre a 4 lits chacune, 10 chambre a 2 lits</p>
            <p>Les sorite sont organiser selon vos envie, vous pouvez visiter le phare de bayahibe ou vous baigner dans Hoyo Azul</p>
            <a href="../reservation.html" class=" btn reserver-btn ">Réserver</a>
        </div>
    </div>

</article>
{/block}