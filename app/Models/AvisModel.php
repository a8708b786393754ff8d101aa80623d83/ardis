<?php 
namespace App\Models;
use CodeIgniter\Model; 
/**
* @file AvisModel.php
* @author Arthur Kretz <kretz.arthur68000@gmail.com>
* @date 19/02/2022
* @brief Model pour les avis 
* @details 
* <p>Cette classe contient toute les requete liée aux avis</p>
**/

class AvisModel extends Model{
    // ! regler les champs ici
    protected $table         = 'avis';
    protected $primaryKey    = 'avis_id';
    protected $allowedFields = ["avis_titre","avis_cont","avis_answer" ,"avis_date" , "avis_nomphoto", "avis_note", "avis_hotel",  "avis_note"];
    protected $returnType    = 'App\Entities\AvisEntity';

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

    /** 
    * @brief Methode qui contient la requete SQL pour avoir l'avis de l'hotel 
    * @details
    * <p>Elle recupere le titre, la date, la note, le contenue ,la photo de l'avis est le nom de l'hotel</p>
    * @return array les donner d'avis
    */
    public function getAvis():array {
        return $this->db->query("SELECT avis_titre, avis_date, avis_note, avis_nomphoto , hotel_nom, avis_cont
                        FROM avis
                        INNER JOIN hotels ON hotel_id=avis_hotel 
                        ORDER BY avis_date ASC 
                        ")->getResult();
    }

    /** 
    * @brief Methode qui contient la requete SQL pour un avis 
    * @details
    * <p>Elle ajoute le titre, la date, la note, le contenue.</p>
    * @return string le titre
    * @return string le contenue 
    * @return string la note 
    * @return string l'id de l'hotel
    */
    public function setAvis(string $title, string $content, string $note, string $id_hotel, string $name_img=null){
        $this->db->query("INSERT INTO avis(avis_titre, avis_cont, avis_date,avis_note, avis_hotel, avis_nomphoto)
                        VALUES(?, ?, CURRENT_DATE, ?, ?, ?)", [$title, $content, $note, $id_hotel, $name_img]);
    }
}