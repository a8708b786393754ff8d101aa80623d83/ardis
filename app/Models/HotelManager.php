<?php 
namespace App\Models; 
use App\Models\HotelModel;
/**
* @file HotelManager.php
* @author Ayoub Brahim <ayoubbrahim68@gmail.com>
* @date 24/02/2022
* @brief Manager des hotel
* @details 
* <p>Cette classe  gérer toute la logique lier aux hotels pour executer la bonne requete</p>
**/

class HotelManager {
    private $respQuery; 
    /**
    * @brief Methode constructrice 
    * @details 
    * <p>Cette methode constructrice initialise la class HotelModel a l'attribut respQuery</p>
    **/
    public function __construct(){
        $this->respQuery = new HotelModel(); 
    }

    /**
    * @brief Methode qui retourne les donner du nom de l'hotel passer au parametre 
    * @param string $page 
    * @details 
    * <p>La methode execute la requete SQL pour recuperer les donner de l'hotel </p>
    * @return array Contient les donner des hotels 
    **/
    public function getData(string $page){
        return $this->respQuery->getAll($page); 
    }

    /**
    * @brief Methode qui tout les noms des hotels   
    * @details 
    * <p>La methode execute la requete SQL pour recuperer les nom de touts les nom </p>
    * @return array Contient les nom des hotels 
    **/
    public function getName(){
        return $this->respQuery->getName(); 
    }
    
    /**    
    * @brief Methode qui retourne les 3 meuilleur hotels 
    * @details 
    * <p>La methode execute la requete SQL pour recuperer les l'image, nom, prix est la ville des 3 meuilleur hotels</p>
    * @return array Contient les donner lier a l'hotel
    **/
    public function getBestHotel(){
        return $this->respQuery->getBestHotels(); 
    }

     /**    
    * @brief Methode qui retourne les noms hotels 
    * @details 
    * <p>La methode execute la requete SQL pour recuperer 
    *           les noms des hotels pour les afficher dans la barre de menu</p>
    * @return array Contient les nom des hotels  
    **/
    public function getHotelsNamesForNavBar()
    {
        $arrNameHotel = []; 
        $resultQuery =  $this->respQuery->getName(); 
        foreach($resultQuery as $_ => $element){
            $arrNameHotel[] = $element->hotel_nom; // je stocke le nom des hotels dans un variable 
        }
        return $arrNameHotel;
    }
}