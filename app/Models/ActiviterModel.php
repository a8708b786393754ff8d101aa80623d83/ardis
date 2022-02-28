<?php 
namespace App\Models;
use CodeIgniter\Model; 
/**
* @file HotelModel.php
* @author Arthur Kurt <email d'arthur>
* @date 19/02/2022
* @brief Model pour les hotels 
* @details 
* <p>Cette classe contient toute les requete liée aux hotels</p>
**/

class ActiviterModel extends Model{
    protected $table         = 'hotels';
    protected $primaryKey    = 'hotel_id';
    protected $allowedFields = ["hotel_nom","hotel_adresse","hotel_cp" ,"hotel_ville" ,
                "hotel_pays" ,"hotel_mail","hotel_tel", "hotel_menu","hotel_activ","hotel_avis", 
                "hotel_image", "hotel_chambr", "hotel_price",  "hotel_note","hotel_contenue"];
    protected $returnType    = 'App\Entities\HotelEntity';

    protected $useTimestamps = true;

    
    /**
    * @brief Methode constructrice 
    * @details 
    * <p>Cette methode constructrice appelle la methode constructrice de la classe Model</p>
    **/
    public function __construct(){
        parent::__construct(); 
    }

    public function getDataOld(){
        return $this->db->query('SELECT activ_nom AS nom, activ_image AS image, activ_loca 
        AS loca,activ_tarif AS tarif, YEAR(activ_date) AS date, activ_descri AS descri, hotel_nom AS nom_hotel 
                                FROM activites
                                INNER JOIN hotels ON hotels.hotel_id = activites.hotel_id 
                                WHERE YEAR(`activ_date`) < YEAR(CURRENT_DATE)'
                                )->getResult(); 
    }

    public function getDataYoung(){
        return $this->db->query('SELECT activ_nom AS nom, activ_image AS image, activ_loca 
                                AS loca,activ_tarif AS tarif, YEAR(activ_date) AS date, activ_descri AS descri, hotel_nom AS nom_hotel 
                                FROM activites 
                                INNER JOIN hotels ON hotels.hotel_id = activites.hotel_id 
                                WHERE YEAR(`activ_date`) = YEAR(CURRENT_DATE)')->getResult(); 
    }
}