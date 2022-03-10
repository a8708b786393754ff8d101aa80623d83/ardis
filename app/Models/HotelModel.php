<?php 
namespace App\Models;
use CodeIgniter\Model; 
/**
* @file HotelModel.php
* @author Arthur Kretz <kretz.arthur68000@gmail.com>
* @date 19/02/2022
* @brief Model pour les hotels 
* @details 
* <p>Cette classe contient toute les requete liée aux hotels</p>
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
    * @brief Methode constructrice 
    * @details 
    * <p>Cette methode constructrice appelle la methode constructrice de la classe Model</p>
    **/
    public function __construct(){
        parent::__construct(); 
    }

    /**
    * @brief Methode qui retourne les meuilleur hotels selon les prix   
    * @details 
    * <p>La methode contient la requete SQL complexe pour etre reutiliser </p>
    * @return array Contient les donner des hotels aux meuilleur prix
    **/
    public function getBestHotels(): array {
        return $this->db->query(
                'SELECT hotel_image,hotel_nom,hotel_price, hotel_ville
                FROM hotels
                WHERE hotel_price < (
                                    SELECT MAX(hotel_price) 
                                    FROM hotels)
                ORDER BY hotel_price 
                LIMIT 3'
                )->getResult(); 
    }

    /**
    * @brief Methode qui retourne  les information lieer a l'hotel specifier    
    * @details 
    * <p>La methode contient la requete SQL pour recuperer l'image, nom, prix, ville note, contenue, email de l'hotel </p>
    * <p> Le premier caractere est mis en majiscule</p>
    * @param string $hotel
    * @return array Contient les donner de l'hotel
    **/
    public function getAll(string $hotel):array {
        return $this->db->query(
            'SELECT hotel_nom,hotel_image,hotel_pays,hotel_price, hotel_ville, hotel_note, hotel_contenue,hotel_mail, hotel_tel
            FROM hotels
            WHERE hotel_nom = ?', [ucfirst($hotel)])->getResult();
    }

    /**
    * @brief Methode qui retourne tout les noms des hotels 
    * @details 
    * <p>La methode contient la requete SQL  pour recuperer les nom de tout les hotels</p>
    * @return array Contient les nom des hotels
    **/
    public function getName():array {
        return $this->db->query('SELECT hotel_nom FROM hotels')->getResult();
    }

    /**
    * @brief Methode qui retourne l'id de l'hotel selon son nom    
    * @details 
    * <p>La methode contient la requete SQL qui recuperer l'id de l'hotel  </p>
    * @param string $name_hotel
    * @return array l'id de l'hotel 
    **/
    public function getIdByNameHotel(string $name_hotel):array {
        return $this->db->query('SELECT  hotel_id 
                                FROM hotels 
                                WHERE hotel_nom=? 
                                LIMIT 1', [$name_hotel])->getResult(); 
    }

    /**
    * @brief Methode qui retourne le prix de l'hotel par son nom
    * @details 
    * <p>La methode contient la requete SQL pour recuperer le prix de l'hotel par son nom.</p>
    * @param string $name
    * @return array le prix de l'hotel 
    **/
    public function getPriceHotelByName(string $name){
        return $this->db->query('SELECT hotel_price AS price 
                                FROM hotels 
                                WHERE hotel_nom = ?', [$name])->getResult(); 
    }

    public function deleteAllInformations(string $id){
        $this->db->query('DELETE hotels WHERE hotel_id = ?', [$id]); 
    }
}