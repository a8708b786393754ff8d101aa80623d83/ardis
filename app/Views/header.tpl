<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description " content="Hotel ardis ,l 'hotel du 'climats ' ">
    <meta name="description " content="Decouvrez nos hotels sur tout les climats, nous avons des hotel sur les 4 coin du globe.
    Nous avons 3 hotel a dubai, 2 en suise est 2 a punt cana tousse ">
    <link rel="stylesheet " href="{base_url('assets/css/bootstrap.css')}">
    <link rel="stylesheet" href="{base_url('assets/css/'|cat:$name_file|cat:'.css')}">
    <title>{$name_file}</title>
</head>
{if $name_file eq 'index'}
<body style="background-image: url({base_url('assets/Images/background.jpg')})">
{elseif $name_file eq 'activiter'}
<body style="background-image: url({base_url('assets/Images/desert_activiter.jpg')})">
{else}
<body>
{/if}
    <!-- hedear -->
<header>
    <!-- navbar -->
    <nav class="navbar bg-transparent navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <a class="navbar-brand logo" href="{base_url('index.tpl')}"><img src="{base_url('assets/Images/logo.png')}" alt="logo" width="80"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <!-- item navbar  -->
                    <li class="nav-item">
                        <a class="nav-link active text-black" aria-current="page" href="{base_url('index.tpl')}">Accueil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-black" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                             Nos hotels
                        </a>
                        <ul class="dropdown-menu bg-transparent" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item bg-transparent text-black" href="{base_url('punta_cana.tpl')}">>Punta cana</a></li>
                            <li><a class="dropdown-item bg-transparent text-black" href="{base_url('dubai.tpl')}">>Dubai</a></li>
                            <li><a class="dropdown-item bg-transparent text-black" href="{base_url('suisse.tpl')}">>Suisse</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="{base_url('reservation.tpl')}">Reservation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="{base_url('activiter.tpl')}">Nos activiter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="{base_url('restaurant.tpl')}">Restaurants</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="{base_url('galerie_photo.tpl')}">Galerie_photo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="{base_url('login.tpl')}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="{base_url('create_account.tpl')}">Creer un compte</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="{base_url('avis.tpl')}">Les avis </a>
                    </li>
                   
                </ul>
            </div>
        </div>
    </nav>
</header>