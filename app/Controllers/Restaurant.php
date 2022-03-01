<?php 
namespace App\Controllers; 
use App\Models\RestaurantManager;
/**
* @file Restaurant.php
* @author Ayoub Brahim <ayoubbrahim68@gmail.com>
* @date 27/02/2022
* @brief Controller des menus  
* @details 
* <p>L'action de la classe est view</p>
**/

class Restaurant extends Pages{
    protected $id;
    protected string $nom;
    protected string $prix;
    protected string $descri;
    protected string $image;
    protected array  $allData; 
    protected RestaurantManager $restoManagenr; 

    /**
    * @brief Méthode constructrice 
    * @details 
    * <p>Cette méthode appelle la méthode constructrice de la classe Pages</p>
    * <p>La méthode constructrice initialise la classe RestaurantManager</p>
    * <p>Elle récupére les information a afficher.</p>
    **/
    public function __construct(){
        parent::__construct(); 
        $this->restoManagenr = new RestaurantManager; 
        $this->allData = $this->restoManagenr->getAllData(); 

    }

    /**
    * @brief Méthode index
    * @details
    * <p>Donne a la vue les information afficher, comme la couleur de la barre de navigation, le meta_tile...</p>
    */
    public function index(){
        $this->_data['color_link_nav'] = 'black';
        $this->_data['name_file']      = 'restaurant';
        // $this->_data['element']        = $this->hotelMngr->getBestHotel(); 
        $this->_data['content_menu']   = $this->allData; 
        $this->_data['meta_title']      = 'Restaurant'; 
        $this->display("restaurant.tpl");
    }
}
    