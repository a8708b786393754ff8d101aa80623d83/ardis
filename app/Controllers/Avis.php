<?php 
namespace App\Controllers;
use App\Models\AvisManager;
/**
* @file Avis.php
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

class Avis extends Pages{
    protected $avisMngr; 
    
    public function __construct(){
        parent::__construct(); 
        $this->avisMngr = new AvisManager; 
    }

    public function index(){
        $this->_data['color_link_nav'] = 'dark';
        $this->_data['name_file']      = 'avis';
        $this->_data['meta_title']     = 'Avis'; 
        $this->_data['avis']           = $this->avisMngr->getAllData(); 
        $this->display('avis.tpl');
    }
}