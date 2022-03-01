<?php 
namespace App\Controllers; 
use App\Models\ActiviterManager; 
/**
* @file Activiter.php
* @author Ayoub Brahim <ayoubbrahim68@gmail.com>
* @date 21/02/2022
<<<<<<< HEAD
* @brief Controller des activités
=======
* @brief Controller des activiter
>>>>>>> 9a1b3889c48b202efda712dd983521709ee766fe
* @details 
* <p>Les actions sont :</p>
* <ul>
* 	<li><strong>index</strong>   : pour la page activiter</li>
* 	<li><strong>archive</strong> : activiter archiver</li>
* </ul>
**/

class Activiter extends Pages{
    protected string $activ_id;
    protected string $hotel_id;
    protected string $nom;
    protected string $date;
    protected string $image;
    protected string $loca;
    protected string $descri;
    protected string $dispo;

    protected ActiviterManager $activManager; 


    /**
    * @brief Méthode constructrice 
    * @details 
    * <p>Cette méthode appelle la méthode constructrice de la classe Pages</p>
    * <p>La méthode constructrice initialise la classes ActiviterManaager est lui passe par argument les nom des hotels</p>
    **/
    public function __construct(){
        parent::__construct(); 
        $this->activManager = new  ActiviterManager($this->allNamesHotels); 
        $this->_data['color_link_nav'] = 'black';
        $this->_data['name_file']      = 'activiter';
        $this->_data['meta_title']     = 'Activiter'; 
    }
    
    
<<<<<<< HEAD
    // Méthode pour ajouter les données affichées dans la page home
=======
    /**
    * @brief Méthode index 
    * @details 
    * <p>Cette méthode donne un tableaux associatif qui contient les "jeune" activiter a smarty</p>
    **/
>>>>>>> 9a1b3889c48b202efda712dd983521709ee766fe
    public function index(){
        $this->_data['activiter'] = $this->activManager->getYoungActiviter(); 
        $this->display('activiter.tpl');
    }

    /**
    * @brief Méthode archive 
    * @details 
    * <p>Cette méthode donne un tableaux associatif qui contient les activiter archiver a smarty</p>
    **/
    public function archive(){
        $this->_data['activiter_archiver'] = $this->activManager->getOldActiviter(); 
        $this->display('activiter_archiver.tpl');
    }
}