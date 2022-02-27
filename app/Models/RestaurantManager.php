<?php 
 namespace App\Models; 
/**
* @file articles_controller.php
* @author Ayoub Brahim
* @date 20/02/2022
* @brief Manager pour les client connecter
*  @details 
* <p>Cette class gérer toute la logique pour executer une requete</p>
* <p>Les actions sont :</p>
* <ul>
* 	<li><strong>home</strong> : page d'accueil</li>
* 	<li><strong>blog</strong> : Liste des articles</li>
* </ul>
*
**/
class RestaurantManager{
    protected $respQuery; 

    public function __construct(){
        $this->respQuery = new RestaurantModel; 
    }

    public function getAllData(){
        $data = []; 
        foreach($this->respQuery->getAllData() as $element){
            $data['hotel_nom'][] = $element->nomHotel; 
            $data['descri'][]    = $element->descri; 
            $data['price'][]     = $element->price; 
            $data['image'][]     = $element->image; 
            $data['nom'][]       = $element->nom; 
        }return $data; 
    }
}