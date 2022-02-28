<?php 
namespace App\Controllers; 
use App\Models\HotelManager;
use App\Models\ImageManager;
/**
* @file Customers.php
* @author Ayoub Brahim <ayoubbrahim68@gmail.com>
* @date 16/02/2022
* @brief Controller de la gallerie photo
* @details 
* <p>Les actions de la classe est view</p>
**/

class PhotoGallery extends Pages{
    protected int $max_photo = 4; 
    protected array $allHotelNoms; 
    protected HotelManager $hotelManager; 
    protected ImageManager $ImgManager; 

    /**
    * @brief Méthode constructrice 
    * @details 
    * <p>Cette méthode appelle la méthode constructrice de la classe Pages</p>
    * <p>La méthode constructrice initialise la classe HotelManager </p>
    * <p>Elle récupére les noms des hôtels pour les afficher dans la barre de navigation/p>
    **/
    public function __construct(){
        parent::__construct(); 
        $this->hotelManager = new HotelManager; 
        $this->ImgManager = new ImageManager();
    }

    /**
    * @brief Méthode view
    * @details
    * @param string $page='galerie-photo'
    * <p>Elle envoie l'information à Smarty pour afficher la page galerie photo </p>
    */
    public function view($page='galerie_photo'){
        $this->_data['color_link_nav'] = 'black'; 
        $this->_data['name_file']      = $page; 
        $this->_data['meta_title']      = 'Galerie photo'; 
        $this->_data['photo']          = $this->ImgManager->getAllData($this->_data['nav_bar_hotel']) ;
        $this->display($page.'.tpl');
    }
}