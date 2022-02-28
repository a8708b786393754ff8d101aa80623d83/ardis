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
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    
    /**
    * @brief Methode constructrice 
    * @details 
    * <p>Cette methode constructrice appelle la methode constructrice de la classe Model</p>
    **/
    public function __construct(){
        parent::__construct(); 
    }

    public function getAllData(){
        return $this->db->query('SELECT activ_nom AS nom, activ_image AS image, activ_loca AS loca , 
                                activ_tarif AS tarif, activ_date AS date, activ_descri AS descri 
                                FROM activites'
                                )->getResult(); 
    }

    public function getAllDataYoung(){
        return $this->db->query('SELECT activ_nom AS nom, activ_image AS image, activ_loca AS loca , 
                        activ_tarif AS tarif, activ_date AS date, activ_descri AS descri
                        FROM activites
                        WHERE YEAR(`activ_date`) = YEAR(CURRENT_DATE)' 
                        )->getResult(); 

    }
}