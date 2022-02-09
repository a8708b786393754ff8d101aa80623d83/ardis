<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description " content="Hotel ardis ,l 'hotel du 'climats ' ">
    <meta name="description " content="Decouvrez nos hotels sur tout les climats, nous avons des hotel sur les 4 coin du globe.
    Nous avons 3 hotel a dubai, 2 en suise est 2 a punt cana tousse ">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/create_account.css">
    <title>Hotel ardis</title>
</head>

<body >
    <!-- hedear -->
    <header>
        <!-- navbar -->
        <nav class="navbar bg-transparent navbar-expand-lg navbar-light ">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html"><img src="assets/Images/logo.png" alt="logo" width="80"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-black" aria-current="page" href="index.html">Acceuil</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-black" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Nos hotels
                    </a>
                            <ul class="dropdown-menu bg-transparent" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item bg-transparent text-black" href="nos_hotel/punta_cana.html">Punta cana</a></li>
                                <li><a class="dropdown-item bg-transparent text-black" href="nos_hotel/dubai.html">Dubai</a></li>
                                <li><a class="dropdown-item bg-transparent text-black" href="nos_hotel/suisse.html">Suisse</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="reservation.html">Reservation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="activiter.html">Nos activiter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="restaurant.html">Restaurants</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="galerie_photo.html">Galerie photo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="login.html">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="create_account.html">Creer un compte</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="avis.html">Les avis </a>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- reservation -->
   <section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 well well-sm sign_up">
                <legend><a href="http://www.jquery2dotnet.com"><i class="glyphicon glyphicon-globe"></i></a> Sign up!</legend>
                <form action="#" method="post" class="form" role="form">
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <input class="form-control" name="firstname" placeholder="Prénom" type="text"
                            required autofocus />
                    </div>
                    <div class="col-xs-6 col-md-6">
                        <input class="form-control" name="lastname" placeholder="Nom" type="text" required />
                    </div>
                </div>
                <input class="form-control" name="email" placeholder="Email" type="email" />
                <input class="form-control" name="password" placeholder="Enter password" type="password" />
                <input class="form-control" name="Confirm_password" placeholder="Re-enter Password" type="password" />
                <br />
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign up</button>
                </form>
            </div>
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