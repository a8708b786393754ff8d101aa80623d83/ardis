<?php 
namespace App\Models;
use CodeIgniter\Model; 

class ReservationModel extends Model{
    protected $table         = 'clients';
    protected $primaryKey    = 'client_id';
    protected $allowedFields = [ "client_nom","client_prénom",
                                "client_adresse","client_cp" ,"client_ville" ,"client_pays" ,"client_email",
                                "client_tel", "compte_client","resrv_client","client_avis"
                                ];
    protected $returnType    = 'App\Entities\UserEntity';

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function __construct(){
        parent::__construct();
    }


    public function setReservation(string $startdate, string $enddate, string $client_id, string $chamb_reserv, string $chamb_id, string $hotel_id, string $activ_id){
        $this->db->query('INSERT INTO TABLE  reservations (reserv_datedeb,reserv_datefin, client_id,chamb_reserv,chamb_id,hotel_id,activ_id)
                            VALUES (?, ?, ?, ?, ?, ?, ?)', [$startdate, $enddate, $client_id, $chamb_reserv, $chamb_id, $hotel_id, $activ_id]);
    }
}