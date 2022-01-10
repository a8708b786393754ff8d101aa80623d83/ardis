<?php 
    require_once 'headers.php'; 
    echo head('Activiter');
?>
    <div class="container ">
        <!-- locate -->
        <div class="row " aria-label="breadcrumb">
            <ol class="breadcrumb ">
                <li>Vous ete ici: </li>
                <li class="breadcrumb-item ">
                    <a href="../index.html " class="text-black ">
                        Accueil
                    </a>
                </li>
                <li class="breadcrumb-item ">
                    <a href="# " class="text-black ">
                        Nos activites
                    </a>
                </li>
            </ol>
        </div>
    </div>


    <!-- description  -->
    <div class="container">
        <div class="row">
            <p>
                Pour vous divertir pendant votre séjour, nous organiserons de activer où vous pouvez vous amuser.
            </p>

            <p>Dubaï: promenade en chameaux, Bar. </p>
            
            <p>Pointe Cana: jet-ski, visite du phare bayahibe.</p>  
            
            <p>Suisse: ski, raquette.</p>  

            <img class="phare_bayahibe" src="assets/Images/phare.png" alt="phare_bayahibe" >
            <a href="reservation.html" class="btn reserver-btn" >Reserver</a>
        </div>
    </div>

<?php
require_once 'footers.php'; 