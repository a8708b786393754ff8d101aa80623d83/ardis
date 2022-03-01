<?php 
namespace App\Models; 
define('MAX_ACTIVITER_SHOW', 4); 
/**
* @file ActiviterManager.php
* @author Ayoub Brahim <ayoubbrahim68@gmail.com>, Arthur Kurt
* @date 27/02/2022
* @brief Manager pour les activiter
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

    /**
    * @brief Methode constructrice 
    * @param array $allHotels
    * @details 
    * <p>Cette methode constructrice initialise la classe ActiviterModel pour utiliser les executer les requete SQL </p>
    * <p> Elle a besoin des nom des hotels pour les utiliser dans les autres methode</p>
    **/
    public function __construct(array $allHotels){
        $this->activModel = new ActiviterModel; 
        $this->namesHotels = $allHotels; 
    }

    /**
    * @brief Methode qui donne les activiter les plus recentes 
    * @details 
    * <p>La methode execute une requete SQL qui lui donne les activiter recente.</p>
    * <p>Elle a qu'a les ranger est par hotel est a renvoyer le tableaux</p>
    * @return array Contient les donner trier est ordonné de la bonne manier pour qu'elle sois affciher
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
    * @brief Methode qui donne les activiter les plus viellies
    * @details 
    * <p>La methode execute une requete SQL qui lui donne les activiter les moins recentes.</p>
    * <p>Elle a qu'a les ranger est par hotel est a renvoyer le tableaux</p>
    * @return array Contient les donner trier est ordonné de la bonne manier pour qu'elle sois affciher
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