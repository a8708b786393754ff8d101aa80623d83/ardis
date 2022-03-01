<?php 
namespace App\Models; 
define('MAX_ACTIVITER_SHOW', 4); 
/**
* @file ActiviterManager.php
* @author Ayoub Brahim <ayoubbrahim68@gmail.com>, Arthur Kurt
* @date 27/02/2022
* @brief Manager pour les activités
*  @details 
* <p>Cette classe gére toute la logique pour exécuter une requête</p>
* <p>Les actions sont :</p>
* <ul>
* 	<li><strong>home</strong> : page d'accueil</li>
* 	<li><strong>blog</strong> : liste des articles</li>
* </ul>
**/
class ActiviterManager{
    protected array $namesHotels; 
    protected ActiviterModel $activModel; 

    /**
    * @brief Méthode constructrice 
    * @param array $allHotels
    * @details méthode constructrice initialise la classe ActiviterModel pour utiliser et exécuter les requêtes SQL </p>
    * <p> Elle a besoin des noms des hôtels pour les utiliser dans d'autres méthodes</p>
    **/
    public function __construct(array $allHotels){
        $this->activModel = new ActiviterModel; 
        $this->namesHotels = $allHotels; 
    }

    /**
    * @brief Méthode qui donne les activités les plus récentes 
    * @details 
    * <p>La méthode exécute une requête SQL qui lui donne les activités récentes.</p>
    * <p>Elle n'a plus qu'à les ranger par hôtel et à renvoyer le tableau</p>
    * @return array Contient les données triées et ordonnées de la bonne manière pour qu'elle soient affichées
    **/
    public function getYoungActiviter(){
        $arrdata = []; 
        $respQuery = $this->activModel->getDataYoung();
        for($i=0; $i < MAX_ACTIVITER_SHOW; $i++){
            $arrdata[$respQuery[$i]->nom_hotel][] = $respQuery[$i];  
        }
        return $arrdata; 
    }

    /**
    * @brief Méthode qui donne les activiter les plus anciennes
    * @details 
    * <p>La méthode exécute une requête SQL qui lui donne les activités récentes.</p>
    * <p>Elle n'a plus qu'à les ranger par hôtel et à renvoyer le tableau</p>
    * @return array Contient les données triées et ordonnées de la bonne manière pour qu'elle soient affichées
    **/
    public function getOldActiviter(){
        $arrdata = []; 
        $respQuery = $this->activModel->getDataOld();
        for($i=0; $i < MAX_ACTIVITER_SHOW; $i++){
            $arrdata[$respQuery[$i]->nom_hotel][] = $respQuery[$i];  
        }
        return $arrdata; 
    }
}