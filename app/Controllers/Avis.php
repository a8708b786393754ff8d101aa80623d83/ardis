<?php 
namespace App\Controllers;
use App\Models\AvisManager;
/**
* @file Avis.php
* @author Ayoub Brahim <ayoubbrahim68@gmail.com>
* @date 14/02/2022
* @brief Controller des avis 
* @details 
* <p>Les actions sont :</p>
* <ul>
* 	<li><strong>index</strong> : pour afficher la page d'acceuil</li>
* </ul>
**/

class Avis extends Pages{
    protected $avisMngr; 
    
    /**
    * @brief Méthode constructrice
    * @details
    * <p>Cette méthode appelle la méthode constructrice de la classe mère Pages</p>
    * <p>Elle instancie un la classe AvisManager</p>
    **/
    public function __construct(){
        parent::__construct(); 
        $this->avisMngr = new AvisManager; 
    }

     /**
     * @brief Méthode index
     * @details
     * <p>Elle envoie l'information à Smarty pour afficher la page d'acceuil, elle recuperer toute les avis</p>
     */
    public function index(){
        $this->_data['color_link_nav'] = 'dark';
        $this->_data['name_file']      = 'avis';
        $this->_data['meta_title']     = 'Avis'; 
        $this->_data['avis']           = $this->avisMngr->getAllData();
        $this->display('avis.tpl');
    }
}