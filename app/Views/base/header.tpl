<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description " content="Hotel ardis ,l 'hotel du 'climats ' ">
    <meta name="description " content="Découvrez nos hôtels sur tout les climats, nous avons des hôtels Dans les 4 coins du globe.
    Nous avons 3 hotels à dubai, 2 en suisse et 2 à punt cana. ">
    <link rel="stylesheet " href="{base_url('assets/css/bootstrap.css')}">
    <link rel="stylesheet" href="{base_url('assets/css/'|cat:$name_file|cat:'.css')}">
    <title>{$name_file}</title>
</head>
{if $name_file eq 'index'}
<body style="background-image: url({base_url('assets/Images/background.jpg')})">
{else}
<body>
{/if}
    <!-- hedear -->
<header>
    <!-- navbar -->
    <nav class="navbar bg-transparent navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <a class="navbar-brand logo" href="{base_url('pages/index')}"><img src="{base_url('assets/Images/logo.png')}" alt="logo" width="80"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <!-- item navbar  -->
                    <li class="nav-item">
                        <a class="nav-link active text-{$color_link_nav}" aria-current="page" href="{base_url('pages')}">Accueil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-{$color_link_nav}" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                             Nos hôtels
                        </a>
                        <ul class="dropdown-menu bg-transparent" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item bg-transparent text-{$color_link_nav}" href="{base_url('hotel/sampatico')}">Punta cana</a></li>
                            <li><a class="dropdown-item bg-transparent text-{$color_link_nav}" href="{base_url('hotel/dubai')}">Dubai</a></li>
                            <li><a class="dropdown-item bg-transparent text-{$color_link_nav}" href="{base_url('hotel/alpardis')}">Suisse</a></li>
                              <li><a class="dropdown-item bg-transparent text-{$color_link_nav}" href="{base_url('hotel/hawai')}">Hawai</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-{$color_link_nav}" href="{base_url('pages/reservation')}">reservation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-{$color_link_nav}" href="{base_url('pages/activiter')}">nos activiter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-{$color_link_nav}" href="{base_url('pages/restaurant')}">restaurants</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-{$color_link_nav}" href="{base_url('pages/galerie_photo')}">galerie photo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-{$color_link_nav}" href="{base_url('pages/avis')}">les avis </a>
                    </li>
                    {if isset($smarty.session.pseudo)}
                        <li class="nav-item">
                            <a class="nav-link text-{$color_link_nav}" href="{base_url('customers/profile/'|cat: $smarty.session.pseudo )}">profile - {$smarty.session.pseudo}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-{$color_link_nav}" href="{base_url('customers/logout')}">se déconnecter</a>
                        </li>
                    {else}
                        <li class="nav-item">
                            <a class="nav-link text-{$color_link_nav}" href="{base_url('visitor/create_account')}">creer un compte</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-{$color_link_nav}" href="{base_url('visitor/login')}">login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-{$color_link_nav}" href="{base_url('visitor/mdpoublier')}">mot de passe oublié </a>
                        </li>

                    {/if}
                </ul>
            </div>
        </div>
    </nav>
</header>
{if $name_file neq 'index'}
<div class="container ">
    <div class="row " aria-label="breadcrumb ">
            <ol class="breadcrumb ">
                <li>Vous ete ici: </li>
                <li class="breadcrumb-item ">
                    <a href="{base_url('pages/index')} " class="text-black ">
                        Accueil
                    </a>
                </li>
                {if $name_file == 'hawai' || $name_file == 'sampatico' || $name_file == 'dubai'|| $name_file == 'alpardis'}
                    <li class="breadcrumb-item ">
                    <a href="" class="text-black ">
                        Nos hotels
                    </a>
                </li>
                {/if}
                <li class="breadcrumb-item ">
                    <a href="" class="text-black ">
                        {$name_file}
                    </a>
                </li>
            </ol>
        </div>
    </div>
</div>
{/if}
