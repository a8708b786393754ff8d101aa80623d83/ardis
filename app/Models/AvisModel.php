<?php 
namespace App\Models;
use CodeIgniter\Model; 
/**
* @file AvisModel.php
* @author Arthur Kurt <email d'arthur>
* @date 19/02/2022
* @brief Model pour les avis 
* @details 
* <p>Cette classe contient toute les requete liée aux avis</p>
**/

class AvisModel extends Model{
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

    public function __construct(){
        parent::__construct(); 
    }

    public function getAvis(){
        return $this->db->query("SELECT avis_titre, avis_date, avis_note, avis_nomphoto , hotel_nom, avis_cont
                        FROM avis
                        INNER JOIN hotels ON hotel_id=avis_id")->getResult();
    }
}