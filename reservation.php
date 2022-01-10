<?php 
    require_once 'headers.php'; 
    echo head('Reservez');
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
                <div class="text-center">
                    <h3 class='destination '>Hotel de destinations</h3>
                        <select class=" destination">
                        <option>Punta cana</option>
                        <option>Dubai</option>
                        <option>Suisse</option>
                        </select>
                </div>
                <div class="date">
                    AU: <input type="date">
                </div>

                <div class="nombre_voyager">
                    <input type="numbre" placeholder="Nombre de voyageurs">
                </div>
            <input type="submit" class="btn" value="reserver">
          </div>
        </div>
    </div>
<?php
    require_once 'footers.php'; 