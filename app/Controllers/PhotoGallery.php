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
* <p>Les action de la classe est view</p>
**/
// ! mettre le allHotelNoms dans le constructeur de la classe Pages

class PhotoGallery extends Pages{
    protected int $max_photo = 4; 
    protected array $allHotelNoms; 
    protected HotelManager $hotelManager; 
    protected ImageManager $ImgModel; 

    /**
    * @brief Methode constructrice 
    * @details 
    * <p>Cette methode constructrice appelle la methode constructrice de la classe Pages</p>
    * <p>La methode constructrice initialise la  classe HotelManager </p>
    * <p>Elle recupere les nom des hotel pour les afficher dans la barre de navigation/p>
    **/
    public function __construct(){
        parent::__construct(); 
        $this->hotelManager = new HotelManager; 
        $this->allHotelNoms  = $this->hotelManager->getHotelsNamesForNavBar();
        
        $this->ImgModel = new ImageManager();
    }

    /**
    * @brief Methode view
    * @details
    * @param string $page='galerie-photo'
    * <p>Elle envoie la information a smarty pour afficher la page galerie photo </p>
    */
    public function view($page='galerie_photo'){
        $this->_data['color_link_nav'] = 'black'; 
        $this->_data['name_file']      = $page; 
        $this->_data['nav_bar_hotel']  = $this->allHotelNoms; 
        $this->_data['photo']          = $this->ImgModel->getAllData($this->allHotelNoms) ;
        $this->display($page.'.tpl');
    }
}