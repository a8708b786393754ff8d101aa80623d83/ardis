<?php 
namespace App\Models; 
use App\Models\HotelModel;
/**
* @file HotelManager.php
* @author Ayoub Brahim <ayoubbrahim68@gmail.com>
* @date 24/02/2022
* @brief Manager des hôtels
* @details 
* <p>Cette classe  gére toute la logique liée aux hôtels pour exécuter la bonne requête</p>
**/

class HotelManager {
    private $respQuery; 
    /**
    * @brief Méthode constructrice 
    * @details 
    * <p>Cette méthode constructrice initialise la classe HotelModel à l'attribut respQuery</p>
    **/
    public function __construct(){
        $this->respQuery = new HotelModel(); 
    }

    /**
    * @brief Méthode qui retourne les données du nom de l'hôtel passer au paramètre 
    * @param string $page 
    * @details 
    * <p>La méthode exécute la requête SQL pour récupérer les données de l'hôtel </p>
    * @return array Contient les données des hôtels 
    **/
    public function getData(string $page){
        return $this->respQuery->getAll($page); 
    }

    /**
    * @brief Méthode qui récupére tous les noms des hôtels   
    * @details 
    * <p>La méthode exécute la requête SQL pour récupérer les noms de tous les hôtels </p>
    * @return array Contient les noms des hôtels 
    **/
    public function getName(){
        return $this->respQuery->getName(); 
    }
    
    /**    
    * @brief Méthode qui retourne les trois meilleurs hôtels 
    * @details 
    * <p>La méthode exécute la requête SQL pour récupérer les images, noms, prix et villes des trois meilleurs hôtels</p>
    * @return array Contient les données liées à l'hôtel
    **/
    public function getBestHotel(){
        return $this->respQuery->getBestHotels(); 
    }

     /**    
    * @brief Méthode qui retourne les noms des hôtels 
    * @details 
    * <p>La méthode exécute la requête SQL pour récupérer 
    *           les noms des hôtels pour les afficher dans la barre de menu</p>
    * @return array Contient les noms des hôtels  
    **/
    public function getHotelsNamesForNavBar()
    {
        $arrNameHotel = []; 
        $resultQuery =  $this->respQuery->getName(); 
        foreach($resultQuery as $_ => $element){
            $arrNameHotel[] = $element->hotel_nom; // je stocke les noms des hôtels dans une variable 
        }
        return $arrNameHotel;
    }
}