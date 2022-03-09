<?php
namespace App\Models; 
use CodeIgniter\Model; 
/**
* @file ImageModel.php
* @author Arthur Kretz <kretz.arthur68000@gmail.com>
* @date 22/02/2022
* @brief Model pour les images 
* @details 
* <p>Cette classe contient toute les requete liée aux images</p>
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
    * @brief Methode constructrice 
    * @details 
    * <p>Cette methode constructrice appelle la methode constructrice de la classe Model</p>
    * <p>La methode constructrice initialise deux classe: </p>
    * <ul>
    * 	<li><strong>Atrribut: userModel</strong> = UserModel</li>
    * 	<li><strong>Atrribut: hotelModel</strong> =  HotelModel</li>
    * </ul>
    **/
    public function __construct(){
        parent::__construct(); 
        $this->userModel = new UsersModel; 
        $this->hotelModel = new HotelModel; 
    }

    /** 
    * @brief Methode qui contient la requete SQL pour avoir le nom de l'image 
    * @details
    * <p>Elle recupere le nom de l'image grace a l'id de l'hotel</p>
    * @param string $id 
    * @return array nom de l'image appartenant a l'hotel 
    */
    public function getImgByIdHotel(string $id){
        return $this->db->query('SELECT image_nom FROM images WHERE hotel_id=?', [$id])->getResult(); 
    }
    
    public function setNameImgHotel(string $id, string $name){
        $this->db->query('UPDATE hotels
                        SET hotel_image = ?
                        WHERE hotel_id = ?', [$name, $id]); 
    }

    /** 
    * @brief Methode qui ajoute l'image profile de l'utilisateur 
    * @details
    * <p>Elle execute la methode getIdByPseudo  pour recuperer le id a partir du pseudo pour 
    *          ensuite inserer l'image de profile dans la table clients</p>
    * @param string $pseudo
    * @param string $name_img 
    * @return array nom de l'image appartenant a l'hotel 
    */
    public function setImgProfile(string $pseudo, string $name_img){
        $id = $this->userModel->getIdByPseudo($pseudo);
        $this->db->query('UPDATE clients SET client_profil_img=? WHERE client_id=?', [$name_img, $id]);
    }
}