<?php 
    require 'headers.php'; 
    echo head_root('Hotel ardis');
?>

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
            <div class="card">
                <img src="assets/Images/punta_cana/photo-1571003123894-1f0594d2b5d9.png" class="d-block mx-auto" alt="hotel_punt_cana" width="200px">
                <div class="card-body text-center">
                    <h5 class="card-title"><a href="nos_hotel/punta_cana.html">Punta cana</a></h5>
                    <p class="card-text ">Hotel ardis Sampatico</p>
                    <p style="color: #ff00aa ;" class="card-text ">a partir de 250€</p>
                </div>
            </div>
            <div class="card">
                <img src="assets/Images/dubai/hotel-desert-dubai.png" class="card-img-top d-block mx-auto" alt="hotel_dubai">
                <div class="card-body">
                    <h5 class="card-title"><a href="nos_hotel/dubai.html">Dubai</a></h5>
                    <p class="card-text text-start">Hotel ardis dubai</p>
                    <p style="color: #ff00aa;" class="card-text text-start">a partir de 320€</p>
                </div>
            </div>
            <div class="card">
                <img src="assets/Images/suisse/images2.png" class="card-img-top d-block mx-auto" alt="hotel_suisse">
                <div class="card-body">
                    <h5 class="card-title"><a href="nos_hotel/suisse.html">Suisse</a></h5>
                    <p class="card-text text-start">Hotel ardis Sampatico</p>
                    <p style="color: #ff00aa ;" class="card-text text-start">a partir de 100€</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="d-grid gap-2 d-md-block">
                <a href="nos_hotel/punta_cana.html" class="btn">Pour en savoir plus</a>
            </div>
        </div>
    </section>

    <!-- footer  -->
    <footer class=" card-footer d-flex align-items-center ">
        <div class="container ">
            <div class="row ">
                <div class="d-flex ">
                    <p class=" "> © 2021 Hotel ardis|Mention legale</p>
                    <p>| Email: hotel@ardis.com |  Numero mobile: 06 06 06 06 06</p>
                    <img src="assets/Images/Objet dynamique vectoriel.png " alt="logo_icone " height="30">
                </div>
            </div>
        </div>
    </footer>   

</body>
<script src="assets/js/bootstrap.bundle.js"></script>
<script src="https://kit.fontawesome.com/f8e0ca0321.js " crossorigin="anonymous "></script>

</html>