<?php 
    require 'headers.php'; 
    echo head_root('Reservez');
?>

<!-- locate -->
    <div class="container ">
        <div class="row " aria-label="breadcrumb ">
            <ol class="breadcrumb">
                <p>Vous ete ici: </p>
                <li class="breadcrumb-item"><a class='text-black' href="index.html">Acceuil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Reserver</li>
            </ol>
        </div>
    </div>



    <div class="container">
        <div class="row">
            <div class="reservation">
                <h2>Reserver dés maintenant !! </h2>
                <div class="destination">
                    <input type="text" placeholder="Hotel de destinations">
                </div>
                <div class="date">
                    Du: <input type="date">
                    AU: <input type="date">
                </div>

                <div class="nombre_voyager">
                    <input type="numbre" placeholder="Nombre de voyageurs">
                </div>
            <input type="submit" class="btn" value="reserver">
          </div>
        </div>
    </div>

    <!-- footer -->
    <footer class=" card-footer d-flex align-items-center ">
        <div class="container ">
            <div class="row ">
                <div class="d-flex ">
                    <p class=" "> © 2021 Hotel ardis|Mention legale</p>
                    <p>| Email: hotel@ardis.com |  Numero mobile: 06 06 06 06 06</p>
                    <img src="../assets/Images/Objet dynamique vectoriel.png " alt="logo_icone " height="30">
                </div>
            </div>
        </div>
    </footer>
</body>
</html>