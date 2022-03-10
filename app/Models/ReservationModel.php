<?php 
namespace App\Models;
use CodeIgniter\Model; 
/**
* @file ReservationModel.php
* @author Arthur
* @date 24/02/2022
* @brief Manager pour la reservation
*  @details 
* <p>Cette classe gére toute la logique pour executer la bonne requete</p>
**/

class ReservationModel extends Model{
    protected $table         = 'reservations';
    protected $primaryKey    = 'reserv_id';
    protected $allowedFields = [ "reserv_datedeb","reserv_datefin","client_id" ,"chamb_reserv" ,"chamb_id" ,"hotel_id","activ_id", "activ_reserv"];
    protected $returnType    = 'App\Entities\ReservationEntity';

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

     /**
    * @brief Méthode constructrice
    * @details
    * <p>Cette méthode appelle la méthode constructrice de la classe mère Model</p>
    **/
    public function __construct(){
        parent::__construct();
    }

    /** 
    * @brief Methode qui contient la requete SQL pour avoir le resultat de l'hotel. 
    * @details
    * <p>Elle recupere le nom, ville pays, contenue  est le nom de l'iamge de l'hotel.</p>
    */
    public function setReservationWithActiv(string $startdate, string $enddate, string $client_id, string $chamb_reserv, string $chamb_id, string $hotel_id, string $activ_id){
        $this->db->query('INSERT INTO  reservations (reserv_datedeb,reserv_datefin, client_id,
                                    chamb_reserv,chamb_id,hotel_id,activ_id)
                            VALUES (?, ?, ?, ?, ?, ?, ?)', 
                                [$startdate, $enddate, $client_id, $chamb_reserv, $chamb_id, $hotel_id, $activ_id]);
    }

    /** 
    * @brief Methode qui contient la requete SQL pour inserer la reservation sans activiter. 
    * @details
    * <p>Elle insére les donner donner par l'utilisateur.</p>
    * @param string $startdate
    * @param string $enddate
    * @param string $client_id
    * @param string $chamb_reserv
    * @param string $chamb_id
    * @param string $hotel_id
    */
    public function setReservationWithouthActiv(string $startdate, string $enddate, string $client_id, string $chamb_reserv, string $chamb_id, string $hotel_id){
        $this->db->query('INSERT INTO  reservations (reserv_datedeb,reserv_datefin, client_id,chamb_reserv,chamb_id,hotel_id)
                          VALUES (?, ?, ?, ?, ?, ?)', 
                                [$startdate, $enddate, $client_id, $chamb_reserv, $chamb_id, $hotel_id]);
    }

    /** 
    * @brief Methode qui contient la requete SQL pour mettre a jour la chambre . 
    * @details
    * <p>Elle met la chambre en indisponible.</p>
    */
    public function setChambNoDisponible(string $chamb_id){
        $this->db->query('UPDATE chambres 
                        SET chamb_dispo = 0 
                        WHERE chamb_id = ?', [$chamb_id]); 
    }

    /** 
    * @brief Methode qui contient la requete SQL pour recuperer les reservations qui sont disponible.
    * @details
    * <p>Elle recupere l'id de l'hotel (il seras utiliser par son manager), numero de chambre, nombre de lit, l'id de l'activiter de la chambre</p>
    * @return array donner de la reservation
    */
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

    /** 
    * @brief Methode qui contient la requete SQL pour recuperer le numero de chambre par son id. 
    * @details
    * <p>Elle recupere le numero de chambre</p>
    * @return array 
    */
    public function getChambNumByIdClient(string $id_client, string $date_deb_reservation){
        return $this->query('SELECT chamb_num 
                            FROM chambres  
                            INNER JOIN reservations ON reservations.chamb_id = chambres.chamb_id 
                            INNER JOIN clients ON clients.client_id=reservations.client_id 
                            WHERE clients.client_id = ? AND reserv_datedeb = ?
                            ORDER BY reserv_datedeb DESC 
                            LIMIT 1',
                            [$id_client, $date_deb_reservation])->getResult(); 
    }

    /** 
    * @brief Methode qui contient la requete SQL pour avoir la reservation de l'utilsateur. 
    * @details
    * <p>Elle recupere le nombre de reservation le nom de l'hotel.</p>
    * @return array Donner de l'hotel
    */
    public function getUserReservation(string $name_client){
        return $this->db->query('SELECT COUNT(reserv_datedeb) AS nb_reservation, hotels.hotel_nom 
                                FROM reservations 
                                INNER JOIN hotels ON hotels.hotel_id = reservations.hotel_id 
                                INNER JOIN clients ON clients.client_id = reservations.client_id 
                                WHERE clients.client_nom = ? 
                                GROUP BY hotels.hotel_nom', [$name_client])->getResult(); 
    }
}