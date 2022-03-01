<?php 
namespace App\Controllers; 
use App\Models\RestaurantManager;
/**
* @file Restaurant.php
* @author Ayoub Brahim <ayoubbrahim68@gmail.com>
* @date 27/02/2022
* @brief Controller des menus  
* @details 
* <p>Les actions sont :</p>
* <ul>
* 	<li><strong>logout</strong> : se déconnecte du compte courant</li>
* 	<li><strong>profile</strong> : la page de profil</li>
* 	<li><strong>edite_profile</strong> : l'édition du profil</li>
* 	<li><strong>delete_profile</strong> : supression du compte courant</li>
* 	<li><strong>hydrate</strong> : pour mettre à jour les attributs</li>
* </ul>
**/

class Restaurant extends Pages{
    protected $id;
    protected string $nom;
    protected string $prix;
    protected string $descri;
    protected string $image;
    protected array  $allData; 
    protected RestaurantManager $restoManagenr; 

    public function __construct(){
        parent::__construct(); 
        $this->restoManagenr = new RestaurantManager; 
        $this->allData = $this->restoManagenr->getAllData(); 

    }

    public function index(){
        $this->_data['color_link_nav'] = 'black';
        $this->_data['name_file']      = 'restaurant';
        $this->_data['element']        = $this->hotelMngr->getBestHotel(); 
        $this->_data['content_menu']   = $this->allData; 
        $this->_data['meta_title']      = 'Restaurant'; 
        $this->display("restaurant.tpl");
    }
}
    