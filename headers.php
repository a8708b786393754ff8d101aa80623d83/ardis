<?php 
require_once 'conf.php';

define('URL',explode('/', $_SERVER['REQUEST_URI']));

function head(string $title){
    $file = tree_file_config(); 
    
    if (is_string($file)){
        $name_file = explode('.php', $file)[0]; // nom du fichier pour le css 
        $body_background = $name_file === 'index' ?  "<body style='background-image:"."url('assets/Images/background.jpg')>": '<body>'; // faut voir pourquoi les slash(sur la page d'acceuil) n'est plus la !!!

        if ($name_file == ''){ // verif pour la page d'acceuil
            $name_file = 'index'; 
        }
        return "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <meta name='description' content='Hotel ardis ,l hotel du climats'>
            <link rel='stylesheet' href='assets/css/bootstrap.css'>
            <link rel='stylesheet' href='assets/css/".$name_file.".css'>
            <title>".$title."</title>
        </head>
        ".$body_background."
            <!-- hedear -->
            <header>
                <!-- navbar -->
                <nav class='navbar bg-transparent navbar-expand-lg navbar-light '>
                    <div class='container-fluid'>
                        <a class='navbar-brand' href='index.php'><img src='assets/Images/logo.png' alt='logo' width='80'></a>
                        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavDropdown' aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
                        <span class='navbar-toggler-icon'></span>
                    </button>
                        <div class='collapse navbar-collapse' id='navbarNavDropdown'>
                            <ul class='navbar-nav'>
                                <li class='nav-item'>
                                    <a class='nav-link active text-black' aria-current='page' href='index.php'>Acceuil</a>
                                </li>
                                <li class='nav-item dropdown'>
                                    <a class='nav-link dropdown-toggle text-black' href='#' id='navbarDropdownMenuLink' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                            Nos hotels
                            </a>
                                    <ul class='dropdown-menu bg-transparent' aria-labelledby='navbarDropdownMenuLink'>
                                        <li><a class='dropdown-item bg-transparent text-black' href='nos_hotel/punta_cana.php'>Punta cana</a></li>
                                        <li><a class='dropdown-item bg-transparent text-black' href='nos_hotel/dubai.php'>Dubai</a></li>
                                        <li><a class='dropdown-item bg-transparent text-black' href='nos_hotel/suisse.php'>Suisse</a></li>
                                    </ul>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link text-black' href='reservation.php'>Reservation</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link text-black' href='activiter.php'>Nos activiter</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link text-black' href='restaurant.php'>Restaurants</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link text-black' href='galerie_photo.php'>galerie photo</a>
                                </li>
                            
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>";    
    }

    $name_file = explode('.php', $file[0])[0]; // nom du fichier pour le css 
    return "<!DOCTYPE html>
        <html lang='fr'>
        
        <head>
            <meta charset='UTF-8 '>
            <meta name='viewport ' content='width=device-width, initial-scale=1.0 '>
            <meta name='description ' content='Hotel ardis ,l 'hotel du 'climats ' '>
            <link rel='stylesheet ' href='../assets/css/bootstrap.css '>
            <link rel='stylesheet ' href='../assets/css/nos_hotels/".$name_file.".css '>
            <title>".$title."</title>
        </head>
        
        <body>
            <!-- hedear -->
        <header>
            <!-- navbar -->
            <nav class='navbar bg-transparent navbar-expand-lg navbar-light '>
                <div class='container-fluid'>
                    <a class='navbar-brand' href='../index.php'><img src='../assets/Images/logo.png' alt='logo' width='80'></a>
                    <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavDropdown' aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
                    <span class='navbar-toggler-icon '></span>
                    </button>
                    <div class='collapse navbar-collapse' id='navbarNavDropdown'>
                        <ul class='navbar-nav'>
                            <!-- item navbar  -->
                            <li class='nav-item'>
                                <a class='nav-link active ' aria-current='page' href='../index.php'>Accueil</a>
                            </li>
                            <li class='nav-item dropdown'>
                                <a class='nav-link dropdown-toggle text-black ' href='#' id='navbarDropdownMenuLink' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                                    Nos hotels
                                </a>
                                <ul class='dropdown-menu bg-transparent' aria-labelledby='navbarDropdownMenuLink'>
                                    <li><a class='dropdown-item bg-transparent text-black' href='punta_cana.php'>Punta cana</a></li>
                                    <li><a class='dropdown-item bg-transparent text-black' href='dubai.php'>Dubai</a></li>
                                    <li><a class='dropdown-item bg-transparent text-black' href='suisse.php'>Suisse</a></li>
                                </ul>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link text-black' href='../reservation.php'>Reservation</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link text-black' href='../activiter.php'>Nos activiter</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link text-black' href='../restaurant.php'>Restaurants</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link text-black' href='../galerie_photo.php'>galerie photo</a>
        
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
        </header>";
}