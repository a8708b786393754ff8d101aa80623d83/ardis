<?php 
namespace App\Models;
use CodeIgniter\Model; 

class ReservationModel extends Model{
    protected $table         = 'reservations';
    protected $primaryKey    = 'reserv_id';
    protected $allowedFields = [ "reserv_datedeb","reserv_datefin","client_id" ,"chamb_reserv" ,"chamb_id" ,"hotel_id","activ_id", "activ_reserv"];
    protected $returnType    = 'App\Entities\ReservationEntity';

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function __construct(){
        parent::__construct();
    }


    public function setReservationWithActiv(string $startdate, string $enddate, string $client_id, string $chamb_reserv, string $chamb_id, string $hotel_id, string $activ_id){
        $this->db->query('INSERT INTO  reservations (reserv_datedeb,reserv_datefin, client_id,
                                    chamb_reserv,chamb_id,hotel_id,activ_id)
                            VALUES (?, ?, ?, ?, ?, ?, ?)', 
                                [$startdate, $enddate, $client_id, $chamb_reserv, $chamb_id, $hotel_id, $activ_id]);
    }

    public function setReservationWithouthActiv(string $startdate, string $enddate, string $client_id, string $chamb_reserv, string $chamb_id, string $hotel_id){
        $this->db->query('INSERT INTO  reservations (reserv_datedeb,reserv_datefin, client_id,chamb_reserv,chamb_id,hotel_id)
                          VALUES (?, ?, ?, ?, ?, ?)', 
                                [$startdate, $enddate, $client_id, $chamb_reserv, $chamb_id, $hotel_id]);
    }

    public function setChambNoDisponible(string $chamb_id){
        $this->db->query('UPDATE chambres 
                        SET chamb_dispo = 0 
                        WHERE chamb_id = ?', [$chamb_id]); 
    }

    public function getAllData(string $hotel_name, int $nb_lit):array {
        return $this->db->query("SELECT chambres.hotel_id AS hotel_id, chamb_num,  nbr_lit , activ_id, chamb_id
                                FROM hotels
                                INNER JOIN chambres
                                ON hotels.hotel_id = chambres.hotel_id 
                                INNER JOIN activites
                                ON activites.hotel_id = hotels.hotel_id
                                WHERE chamb_dispo = 1 AND hotel_nom = ? AND nbr_lit = ?
                                LIMIT 1", [$hotel_name, $nb_lit])->getResult(); 
    }

    public function getChambNumByIdClient(string $id_client, string $date_deb_reservation){
        return $this->query('SELECT chamb_num 
                            FROM chambres  
                            INNER JOIN reservations ON reservations.chamb_id = chambres.chamb_id 
                            INNER JOIN clients ON clients.client_id=reservations.client_id 
                            WHERE clients.client_id = ? AND reserv_datedeb = ?',
                            [$id_client, $date_deb_reservation])->getResult(); 
    }

    public function getUserReservation(string $name_client){
        return $this->db->query('SELECT COUNT(reserv_datedeb) AS nb_reservation, hotels.hotel_nom 
                                FROM reservations 
                                INNER JOIN hotels ON hotels.hotel_id = reservations.hotel_id 
                                INNER JOIN clients ON clients.client_id = reservations.client_id 
                                WHERE clients.client_nom = ? 
                                GROUP BY hotels.hotel_nom', [$name_client])->getResult(); 
    }
}