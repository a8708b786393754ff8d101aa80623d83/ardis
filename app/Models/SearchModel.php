<?php 
namespace App\Models;
use CodeIgniter\Model; 

class SearchModel extends Model{
    public string $element; 
    public function __construct(string $element_search){
        $this->element = $element_search;
        parent::__construct();
    }

    public function getResultHotel(){
        $this->db->query("SELECT hotel_nom AS nom , hotel_ville AS ville , hotel_pays AS pays, hotel_contenue AS description , hotel_image AS image
        FROM hotels
        WHERE hotel_nom LIKE '%".$this->element."%' 
        OR hotel_ville LIKE '%".$this->element."%' 
        OR hotel_pays LIKE '%".$this->element."%' 
        ")->getResult(); 
    }

    public function getResultAvis(){
        $this->db->query("SELECT  avis_titre AS avis , avis_cont AS contenue 
        FROM avis
        INNER JOIN hotels 
        ON avis.avis_hotel = hotels.hotel_id
        WHERE avis_hotel = '%".$this->element."%'")->getResult();
    }


    public function getResultActiv(){
        $this->db->query("SELECT activ_nom AS nom , activ_tarif AS prix , activ_date AS date , activ_descri AS description
        FROM activites
        INNER JOIN hotels
        ON activites.hotel_id = hotels.hotel_id
        WHERE activ_loca LIKE '%".$this->element."%' AND YEAR(activ_date) = YEAR(CURRENT_DATE) ")->getResult();
    }


}