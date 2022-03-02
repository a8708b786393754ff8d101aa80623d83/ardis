<?php 
namespace App\Models;
use CodeIgniter\Model; 
/**
* @file HotelModel.php
* @author Arthur Kurt <email d'arthur>
* @date 19/02/2022
* @brief Model pour les hôtels 
* @details 
* <p>Cette classe contient toutes les requêtes liées aux hôtels</p>
**/

class HotelModel extends Model{
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
    * @brief Méthode constructrice 
    * @details 
    * <p>Cette méthode appelle la méthode constructrice de la classe Model</p>
    **/
    public function __construct(){
        parent::__construct(); 
    }

    /**
    * @brief Méthode qui retourne les meilleurs hôtels selon leur prix   
    * @details 
    * <p>La méthode contient la requête SQL complexe pour être réutiliser </p>
    * @return array Contient les données des hôtels aux meilleurs prix
    **/
    public function getBestHotels(): array {
        return $this->db->query(
                'SELECT hotel_image,hotel_nom,hotel_price, hotel_ville
                FROM hotels
                WHERE hotel_price < (SELECT MAX(hotel_price) FROM hotels)
                ORDER BY hotel_price 
                LIMIT 3'
                )->getResult(); 
    }

    /**
    * @brief Méthode qui retourne les informations liées à l'hôtel spécifié    
    * @param string $hotel
    * @details 
    * <p>La méthode contient la requête SQL pour récupérer l'image, nom, prix, ville note, contenue, email de l'hôtel </p>
    * <p> Le premier caractère est mis en majuscule</p>
    * @return array Contient les données de l'hôtel
    **/
    public function getAll(string $hotel):array {
        return $this->db->query(
            'SELECT hotel_nom,hotel_image,hotel_pays,hotel_price, hotel_ville, hotel_note, hotel_contenue,hotel_mail 
            FROM hotels
            WHERE hotel_nom = ?', [ucfirst($hotel)])->getResult();
    }

    /**
    * @brief Méthode qui retourne tous les noms des hôtels 
    * @details 
    * <p>La méthode contient la requête SQL  pour récupérer les noms de tous les hôtels</p>
    * @return array Contient les noms des hôtels
    **/
    public function getName():array {
        return $this->db->query('SELECT hotel_nom FROM hotels')->getResult();
    }

    /**
    * @brief Méthode qui retourne l'id de l'hôtel selon son nom    
    * @param string $name_hotel
    * @details 
    * <p>La méthode contient la requêete SQL qui récupére l'id de l'hôtel  </p>
    * @return array l'id de l'hôtel 
    **/
    public function getIdByNameHotel(string $name_hotel):array {
        return $this->db->query('SELECT  hotel_id FROM hotels WHERE hotel_nom=?', [$name_hotel])->getResult(); 
    }
}