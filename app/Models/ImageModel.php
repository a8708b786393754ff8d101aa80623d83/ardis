<?php
namespace App\Models; 
use CodeIgniter\Model; 
/**
* @file ImageModel.php
* @author Arthur Kurt <email d'arthur>
* @date 22/02/2022
* @brief Model pour les images 
* @details 
* <p>Cette classe contient toutes les requêtes liées aux images</p>
**/

class ImageModel extends Model{
    protected $table         = 'images';
    protected $primaryKey    = 'image_id';
    protected $allowedFields = ["image_nom","image_date",
                "page", "hotel_id"];
    protected $returnType    = 'App\Entities\ImageEntity';

    protected UsersModel $userModel; 
    protected HotelModel $hotelModel; 

    /**
    * @brief Méthode constructrice 
    * @details 
    * <p>Cette méthode appelle la méthode constructrice de la classe Model</p>
    * <p>La methode constructrice initialise deux classes: </p>
    * <ul>
    * 	<li><strong>Attribut: userModel</strong> = UserModel</li>
    * 	<li><strong>Attribut: hotelModel</strong> =  HotelModel</li>
    * </ul>
    **/
    public function __construct(){
        parent::__construct(); 
        $this->userModel = new UsersModel; 
        $this->hotelModel = new HotelModel; 
    }

    /** 
    * @brief Méthode qui contient la requête SQL pour avoir le nom de l'image 
    * @details
    * <p>Elle récupére le nom de l'image grâce à l'id de l'hôtel</p>
    * @param string $id 
    * @return array nom de l'image appartenant à l'hôtel 
    */
    public function getImgByIdHotel(string $id){
        return $this->db->query('SELECT image_nom FROM images WHERE hotel_id=?', [$id])->getResult(); 
    }
    

    // ? Récupérer tous les noms des images 
    public function getAllImgNom(){

    }

    // ? Récupére l'id à partir du nom de l'image 
    public function getIdImgByName(string $name_img){

    }

    // ? Récupérer l'image par une date 
    public function getImgDate(string $date_post){
        
    }

    /** 
    * @brief Méthode qui ajoute l'image de profil à l'utilisateur 
    * @details
    * <p>Elle exécute la méthode getIdByPseudo  pour récupérer l'id à partir du pseudo pour 
    *          ensuite insérer l'image de profil dans la table clients</p>
    * @param string $pseudo
    * @param string $name_img 
    * @return array nom de l'image appartenant au profil 
    */
    public function setImgProfile(string $pseudo, string $name_img){
        $id = $this->userModel->getIdByPseudo($pseudo);
        $this->db->query('UPDATE clients SET client_profil_img=? WHERE client_id=?', [$name_img, $id]);
    }

    /**
    * @brief Méthode qui supprime une image
    * @details
    *<p>Elle forge la requête pour supprimer une image à partir de l'id de celle-ci</p>
    * @param string $id 
    */
    public function deleteImg(string $id){
        $this->db->query('query', [$id]); 
    }

}