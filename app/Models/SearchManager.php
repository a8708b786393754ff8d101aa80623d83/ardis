<?php 
 namespace App\Models; 
/**
* @file SearchManager.php
* @author Ayoub Brahim
* @date 27/02/2022
* @brief Manager pour le restaurant
*  @details 
* <p>Cette class gérer toute la logique pour executer une requete</p>
* <p>Les actions sont :</p>
* <ul>
* 	<li><strong>home</strong> : page d'accueil</li>
* 	<li><strong>blog</strong> : Liste des articles</li>
* </ul>
**/
class SearchManager{
    protected $respQuery; 

    public function __construct($element){
        $this->respQuery = new SearchModel($element); 
    }

    public function getAllData(){
        $data = []; 
        foreach($this->respQuery->getAllData() as $element){
            $data['descri'][]    = $element->descri; 
            $data['price'][]     = $element->price; 
            $data['image'][]     = $element->image; 
            $data['nom'][]       = $element->nom; 
        }return $data; 
    }

}