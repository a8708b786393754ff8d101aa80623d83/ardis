<?php
namespace App\Models;
use CodeIgniter\Model;
/**
* @file ActiviterModel.php
* @author Arthur Kretz <kretz.arthur68000@gmail.com>, Ayoub Brahim <ayoubbrahim68@gmail.com>
* @date 19/02/2022
* @brief Model pour les activités
* @details
* <p>Cette classe contient toutes les requêtes liées aux activités</p>
**/

class ActiviterModel extends Model{
    protected $table         = 'activites';
    protected $primaryKey    = 'activ_nom';
    protected $allowedFields = ["activ_nom","activ_image","activ_loca" ,"activ_tarif" ,"activ_date" ,"activ_dispo"];
    protected $returnType    = 'App\Entities\ActivEntity';

    protected $useTimestamps = true;


    /**
    * @brief Méthode constructrice
    * @details
    * <p>Cette méthode appelle la méthode constructrice de la classe mère Model</p>
    **/
    public function __construct(){
        parent::__construct();
    }

    /**
    * @brief Méthode qui contient la requête SQL pour avoir les activités archivées
    * @details
    * <p>Elle récupére le nom de l'activité, l'image, le pays, le tarif par personne, l'année, la description, le nom de l'hôtel qui propose l'activité </p>
    * @return array les données des activités archivées
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
    * @brief Méthode qui contient la requête SQL pour avoir les activités 
    * @details
    * <p>Elle récupére le nom de l'activité, l'image, le pays, le tarif par personne, l'année, la description, le nom de l'hôtel qui propose l'activité </p>
    * @return array les données des activités 
    */
    public function getDataYoung(){
        return $this->db->query('SELECT activ_nom AS nom, activ_image AS image, activ_loca
                                AS loca,activ_tarif AS tarif, activ_date AS date, activ_descri AS descri, hotel_nom AS nom_hotel , activ_dispo AS dispo
                                FROM activites
                                INNER JOIN hotels ON hotels.hotel_id = activites.hotel_id
                                WHERE YEAR(`activ_date`) = YEAR(CURRENT_DATE)')->getResult();
    }

    /**
    * @brief Méthode qui contient la requête SQL pour avoir les activités d'un hotel au particulier
    * @details
    * <p>Elle récupére le nom de l'activité, l'image, le pays, le tarif par personne, l'année, la description, le nom de l'hôtel qui propose l'activité </p>
    * <p>Elle seras utiliser pour l'api</p>
    * @param  string $hotel_name
    * @return array 
    */
    public function getActivByHotelReserv(string $hotel_name){
        return $this->db->query('SELECT activ_nom AS nom, activ_image AS image, activ_loca
                                AS loca,activ_tarif AS tarif, activ_date AS date, activ_descri AS descri, hotel_nom AS nom_hotel , activ_dispo AS dispo , activ_id  AS activID
                                FROM activites
                                INNER JOIN hotels ON hotels.hotel_id = activites.hotel_id
                                WHERE YEAR(`activ_date`) = YEAR(CURRENT_DATE)
                                AND hotel_nom=?', [$hotel_name])->getResult();
    }

    /**
    * @brief Méthode qui contient la requête SQL pour avoir les prix de l'activiter par l'id
    * @details
    * <p>Elle récupére le prix de l'activiter.</p>
    * @param  string $id
    * @return string le prix de l'activiter
    */
    public function getPriceActivByIdActiv(string $id): string{
        return $this->db->query('SELECT activ_tarif AS price
                                FROM activites 
                                WHERE activ_id=?', [$id])->getResult()[0]->price; 
    }

}
