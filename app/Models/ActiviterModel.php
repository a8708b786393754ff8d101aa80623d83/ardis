<?php 
namespace App\Models;
use CodeIgniter\Model; 
/**
* @file Activiter.php
* @author Arthur Kurt <email d'arthur>, Ayoub Brahim <ayoubbrahim68@gmail.com>
* @date 19/02/2022
* @brief Model pour les activiter 
* @details 
* <p>Cette classe contient toute les requete liée aux activiter</p>
**/

class ActiviterModel extends Model{
    protected $table         = 'activites';
    protected $primaryKey    = 'activ_nom';
    protected $allowedFields = ["activ_nom","activ_image","activ_loca" ,"activ_tarif" ,"activ_date" ,"activ_dispo"];
    protected $returnType    = 'App\Entities\ActivEntity';

    protected $useTimestamps = true;

    
    /**
    * @brief Methode constructrice 
    * @details 
    * <p>Cette methode constructrice appelle la methode constructrice de la classe mére Model</p>
    **/
    public function __construct(){
        parent::__construct(); 
    }

    /** 
    * @brief Methode qui contient la requete SQL pour avoir les activiter archiver 
    * @details
    * <p>Elle recupere le nom de l'activter, l'image, le pays, le tarif par personne, l'année, la déscription, le nom de l'hotel qui propose l'activiter </p>
    * @return array les donner des activiter archiver
    */
    public function getDataOld(){
        return $this->db->query('SELECT activ_nom AS nom, activ_image AS image, activ_loca 
        AS loca,activ_tarif AS tarif, activ_date AS date, YEAR(activ_date) AS year, activ_descri AS descri, hotel_nom AS nom_hotel 
                                FROM activites
                                INNER JOIN hotels ON hotels.hotel_id = activites.hotel_id 
                                WHERE YEAR(`activ_date`) < YEAR(CURRENT_DATE)
                                ORDER BY activ_date desc'
                                )->getResult(); 
    }

    /** 
    * @brief Methode qui contient la requete SQL pour avoir les activiter récente 
    * @details
    * <p>Elle recupere le nom de l'activter, l'image, le pays, le tarif par personne, l'année ,la déscription, le nom de l'hotel qui propose l'activiter </p>
    * @return array les donner des activiter archiver
    */
    public function getDataYoung(){
        return $this->db->query('SELECT activ_nom AS nom, activ_image AS image, activ_loca 
                                AS loca,activ_tarif AS tarif, activ_date AS date, activ_descri AS descri, hotel_nom AS nom_hotel , activ_dispo AS dispo 
                                FROM activites 
                                INNER JOIN hotels ON hotels.hotel_id = activites.hotel_id 
                                WHERE YEAR(`activ_date`) = YEAR(CURRENT_DATE)')->getResult(); 
    }
}