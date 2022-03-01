<?php 
namespace App\Controllers;
use App\Models\HotelManager;
use App\Models\SearchManager;
/**
* @file Visitor.php
* @author Ayoub Brahim <ayoubbrahim68@gmail.com>
* @date 14/02/2022
* @brief Controller des visiteurs 
* @details 
* <p>Les actions sont :</p>
* <ul>
* 	<li><strong>index</strong> : pour afficher la page d'acceuil</li>
* 	<li><strong>view</strong> : pour afficher toutes les  pages </li>
* </ul>
**/

class Pages extends BaseController{
    protected $session; 
    protected $allNamesHotels; 
    protected HotelManager $hotelMngr; 
    protected SearchManager $searchMngr; 
    
    private $searchManager; 
    /**
    * @brief Méthode constructrice 
    * @details 
    * <p>Cette méthode initialise les attributs session et hotelMngr à la classe HotelManager</p>
    * <p>Elle charge le helper url pour utiliser la redirection avec codeIgniter</p>
    **/
    public function __construct(){
        $this->session = session();
        $this->hotelMngr = new HotelManager; 
        $this->allNamesHotels =  $this->hotelMngr->getHotelsNamesForNavBar();
        $this->_data['nav_bar_hotel']  = $this->allNamesHotels; 
        helper('url');
    }
    
    /**
     * @brief Méthode index
     * @details
     * <p>Elle envoie l'information à Smarty pour afficher la page d'acceuil </p>
     */
    public function index(){
        $this->_data['color_link_nav'] = 'white';
        $this->_data['name_file']      = 'index';
        $this->_data['element']        = $this->hotelMngr->getBestHotel(); 
        $this->_data['meta_title']     = 'Acceuil'; 
        $this->display();
        die; 
    }
    
    /**
     * @brief Méthode view
     * @details
     * @param  $page
     * <p>Elle envoie l'information à Smarty pour afficher les pages du site </p>
     */
    public function view($page){
        $this->_data['color_link_nav'] = 'black'; 
        $this->_data['name_file']      = $page; 
        $this->_data['meta_title']      = ucfirst($page); 
        $this->display($page.'.tpl');
    }
    
    public function search(){
        $this->searchMngr = new SearchManager($this->request); 

        $this->_data['name_file']      = 'result_search';
        $this->_data['color_link_nav'] = 'black';
        $this->_data['meta_title']     = 'Resultat de la recherche'; 
        $this->_data['result']         = $this->searchMngr->getResult(); 
        
        $this->display('result_search.tpl'); 
    }
    
}