<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Pages');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->group('visitor/', function ($routes){
    $routes->add('/', 'Pages::index');
    $routes->add('/(:any)', 'Pages::view/$1');
    $routes->add('login', 'Visiteur::login'); 
    $routes->add('create_account', 'Visiteur::create_account'); 
    $routes->add('mdpoublier', 'Visiteur::mdpoublier'); 
});

$routes->group('customers', function ($routes){
    $routes->add('/', 'Pages::index');
    $routes->add('/(:any)', 'Pages::view/$1');
    $routes->add('logout', 'Customers::logout'); 
    $routes->add('profile(:any)', 'Customers::profile/$1');
});

$routes->group('moderateur', function ($routes){
    $routes->add('/', 'Moderateur::index');
    $routes->add('panel/', 'Moderateur::panel');
    $routes->add('hotel/(:any)', 'Moderateur::operateHotel/$1');
});

$routes->group('admin', function ($routes){
    $routes->add('/', 'Admin::index');
    $routes->add('panel/', 'Admin::panel');
    $routes->add('users/', 'Admin::operateUser');
    $routes->add('hotel/(:any)', 'Admin::operateHotel/$1');
});

$routes->get('pages/', 'Pages::index');
$routes->get('hotel/(:any)', 'Hotel::view/$1');
$routes->get('reservation', 'Reservation::index');

$routes->get('galerie_photo/', 'PhotoGallery::view');
$routes->get('restaurant/', 'Restaurant::index');
$routes->get('activiter/', 'Activiter::index');
$routes->get('avis/', 'Avis::index');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
