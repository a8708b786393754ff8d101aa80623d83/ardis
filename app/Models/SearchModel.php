<?php 
namespace App\Models;
use CodeIgniter\Model; 

class SearchModel extends Model{
    public string $element; 
    
    public function __construct(string $element_search){
        parent::__construct();
        $this->element = $element_search;
    }

    public function getResultHotel(){
        return $this->db->query("SELECT hotel_nom AS nom, hotel_ville AS ville , hotel_pays AS pays, hotel_contenue AS description , hotel_image AS image
                                FROM hotels
                                WHERE hotel_nom LIKE '%".$this->element."%' 
                                OR hotel_ville LIKE '%".$this->element."%' 
                                OR hotel_pays LIKE '%".$this->element."%' 
                                OR hotel_contenue LIKE '%".$this->element."%' 
                                ")->getResult(); 
    }

    public function getResultAvis(){
        return $this->db->query("SELECT avis_titre AS avis, avis_cont AS contenue, avis_nomphoto AS image
                                FROM avis
                                INNER JOIN hotels 
                                ON avis.avis_hotel = hotels.hotel_id
                                WHERE  avis_hotel LIKE '%".$this->element."%'
                                OR avis_titre LIKE '%".$this->element."%' 
                                ")->getResult();
    }

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