<?php 
namespace App\Models;
use CodeIgniter\Model; 
/**
* @file SearchModel.php
* @author Ayoub Brahim
* @date 27/02/2022
* @brief Model pour la recherche
*  @details 
* <p>Cette class gérer toute la logique pour executer la bonne requete</p>
**/
class SearchModel extends Model{
    public string $element; 
    
    /**
    * @brief Méthode constructrice
    * @details
    * <p>Cette méthode appelle la méthode constructrice de la classe mère Model.</p>
    * <p>Initialise l'attribut element (le mot rentreer par l'utilisateur) pour l'utiliser dans la classe.</p>
    * @param string $element_search
    **/
    public function __construct(string $element_search){
        parent::__construct();
        $this->element = $element_search;
    }

    /** 
    * @brief Methode qui contient la requete SQL pour avoir le resultat de l'hotel. 
    * @details
    * <p>Elle recupere le nom, ville pays, contenue  est le nom de l'iamge de l'hotel.</p>
    * @return array Donner de l'hotel
    */
    public function getResultHotel(){
        return $this->db->query("SELECT hotel_nom AS nom, hotel_ville AS ville , hotel_pays AS pays, hotel_contenue AS description , hotel_image AS image
                                FROM hotels
                                WHERE hotel_nom LIKE '%".$this->element."%' 
                                OR hotel_ville LIKE '%".$this->element."%' 
                                OR hotel_pays LIKE '%".$this->element."%' 
                                OR hotel_contenue LIKE '%".$this->element."%' 
                                ")->getResult(); 
    }

        /** 
    * @brief Methode qui contient la requete SQL pour avoir le resultat de l'avis (non archiver). 
    * @details
    * <p>Elle recupere le le titre, contenue, est le nom d'image de l'avis </p>
    * @return array Donner de l'avis
    */
    public function getResultAvis(){
        return $this->db->query("SELECT avis_titre AS avis, avis_cont AS contenue, avis_nomphoto AS image
                                FROM avis
                                INNER JOIN hotels 
                                ON avis.avis_hotel = hotels.hotel_id
                                WHERE  avis_hotel LIKE '%".$this->element."%'
                                OR avis_titre LIKE '%".$this->element."%' 
                                ")->getResult();
    }

        /** 
    * @brief Methode qui contient la requete SQL pour avoir le resultat de l'activiter. 
    * @details
    * <p>Elle recupere le nom du menu, le prix, la description est l'image </p>
    * @return array Donner de l'activiter
    */
    public function getResultActiv(){
        return $this->db->query("SELECT activ_nom AS nom, activ_tarif AS prix , activ_date AS date , activ_descri AS description, activ_image AS image
                                FROM activites
                                INNER JOIN hotels
                                ON activites.hotel_id = hotels.hotel_id
                                WHERE activ_loca LIKE '%".$this->element."%'
                                OR activ_nom LIKE '%".$this->element."%'
                                OR activ_descri LIKE '%".$this->element."%'
                                AND YEAR(activ_date) = YEAR(CURRENT_DATE) 
                                ")->getResult();
    }
}