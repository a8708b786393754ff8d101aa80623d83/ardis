<?php 
namespace App\Controllers;
use App\Models\HotelManager;
/**
* @file Visitor.php
* @author Ayoub Brahim <ayoubbrahim68@gmail.com>
* @date 14/02/2022
* @brief Controller des visiteur 
* @details 
* <p>Les actions sont :</p>
* <ul>
* 	<li><strong>index</strong> : pour afficher la page d'acceuil</li>
* 	<li><strong>view</strong> : pour afficher toutes les  page </li>
* </ul>
**/

class Pages extends BaseController{
    protected $session; 
    protected $hotelMngr; 

    /**
    * @brief Methode constructrice 
    * @details 
    * <p>Cette methode initialise la variable session est la variable hotelMngr a la classe HotelManager</p>
    * <p>Elle charge le helper url pour utiliser la redirection avec codeIgniter</p>
    **/
    public function __construct(){
        $this->session = session();
        $this->hotelMngr = new HotelManager; 
        helper('url');
    }
    
    /**
    * @brief Methode index
    * @details
    * <p>Elle envoie la information a smarty pour afficher la page d'acceuil </p>
    */
    public function index(){
        $this->_data['color_link_nav'] = 'white';
        $this->_data['name_file']      = 'index';
        $this->_data['element']        = $this->hotelMngr->getBestHotel(); 
        $this->_data['nav_bar_hotel']  = $this->hotelMngr->getHotelsNamesForNavBar();
        $this->display();
        die; 
    }


    /**
    * @brief Methode view
    * @details
    * @param string $page
    * <p>Elle envoie la information a smarty pour afficher les page du site </p>
    */
    public function view($page){
        $this->_data['color_link_nav'] = 'black'; 
        $this->_data['name_file']      = $page; 
        $this->_data['nav_bar_hotel']  = $this->hotelMngr->getHotelsNamesForNavBar();
        $this->display($page.'.tpl');
    }

}