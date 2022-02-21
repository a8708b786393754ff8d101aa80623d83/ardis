<?php 
namespace App\Models;
use CodeIgniter\Model; 

class HotelModel extends Model{
    protected $table         = 'clients';
    protected $primaryKey    = 'client_id';
    protected $allowedFields = ["client_id","client_nom","client_prénom",
                "client_adresse","client_cp" ,"client_ville" ,"client_pays" ,"client_email",
                "client_tel", "compte_client","resrv_client","client_avis"
                ];
    protected $returnType    = 'App\Entities\PagesEntity';

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function __construct()
    {
        parent::__construct(); 
    }

    public function getBestHotels(): array 
    {
        return $this->db->query(
                'SELECT hotel_image,hotel_nom,hotel_price, hotel_ville
                FROM hotels
                WHERE hotel_price < (SELECT MAX(hotel_price) FROM hotels)
                ORDER BY hotel_price 
                LIMIT 3'
                )->getResult(); 
    }

    public function getAll(string $hotel)
    {
        return $this->db->query(
            'SELECT hotel_nom,hotel_image,hotel_pays,hotel_price, hotel_ville, hotel_note, hotel_contenue
            FROM hotels
            WHERE hotel_nom = ?', [ucfirst($hotel)])->getResult();
    }

    public function getName()
    {
        return $this->db->query(
                        'SELECT hotel_nom
                        FROM hotels
                        ')->getResult();
    }

    public function getAllHotelsName()
    {
        return $this->db->query('SELECT hotel_nom AS nom FROM hotels')->getResult(); 
    }
}