<?php 
namespace App\Models; 
define('MAX_ACTIVITER_SHOW', 4); 
/**
* @file RestaurantManager.php
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
class ActiviterManager{
    protected array $namesHotels; 
    protected ActiviterModel $activModel; 

    public function __construct(array $allHotels){
        $this->activModel = new ActiviterModel; 
        $this->namesHotels = $allHotels; 
    }

    public function getYoungActiviter(){
        $arrdata = []; 
        $respQuery = $this->activModel->getDataYoung();
        for($i=0; $i < MAX_ACTIVITER_SHOW; $i++){
            $arrdata[$respQuery[$i]->nom_hotel][] = $respQuery[$i];  
        }
        return $arrdata; 
    }

    public function getOldActiviter(){
        $arrdata = []; 
        $respQuery = $this->activModel->getDataOld();
        for($i=0; $i < MAX_ACTIVITER_SHOW; $i++){
            $arrdata[$respQuery[$i]->nom_hotel][] = $respQuery[$i];  
        }
        return $arrdata; 
    }

}