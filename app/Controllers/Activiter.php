<?php 
namespace App\Controllers; 
use App\Models\ActiviterManager; 
/**
* @file Customers.php
* @author Ayoub Brahim <ayoubbrahim68@gmail.com>
* @date 21/02/2022
* @brief Controller des clients connectés 
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

    public function __construct(){
        parent::__construct(); 
        $this->activManager = new  ActiviterManager($this->allNamesHotels); 
        $this->_data['color_link_nav'] = 'black';
        $this->_data['name_file']      = 'activiter';
        $this->_data['meta_title']     = 'Activiter'; 
    }
    
    
    // methode y ajouter les donner afficher  dans la page home
    public function index(){
        $this->_data['activiter'] = $this->activManager->getYoungActiviter(); 
        $this->display('activiter.tpl');
    }

    public function archive(){
        $this->_data['activiter_archiver'] = $this->activManager->getOldActiviter(); 
        $this->display('activiter_archiver.tpl');
    }
}