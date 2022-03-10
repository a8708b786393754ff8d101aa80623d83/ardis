<?php 
 namespace App\Models; 
/**
* @file RestaurantManager.php
* @author Ayoub Brahim
* @date 27/02/2022
* @brief Manager pour le restaurant
*  @details 
* <p>Cette class gérer toute la logique pour executer une requete lier aux menu est au restaurant</p>
**/

class RestaurantManager{
    protected $respQuery; 

    /**
    * @brief Méthode constructrice 
    * @details 
    * <p>La méthode instancie l'objet RestaurantModel</p>
    **/
    public function __construct(){
        $this->respQuery = new RestaurantModel; 
    }

    /**
    * @brief Méthode getAllData 
    * @details 
    * <p>Cette méthode recupere les menus</p>
    * <p>Elle trie les elements dans un tableaux associatif</p>
    * @return array les données des menus 
    **/
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