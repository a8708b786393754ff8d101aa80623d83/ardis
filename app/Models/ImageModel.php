<?php 
namespace App\Models; 
use CodeIgniter\Model; 

class ImageModel extends Model{
    protected $table         = 'images';
    protected $primaryKey    = 'image_id';
    protected $allowedFields = ["client_id","image_nom","image_date",
                "page", "hotel_id"];
    protected $returnType    = 'App\Entities\PagesEntity';

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected UsersModel $userModel; 
    protected HotelModel $hotelModel; 

    public function __construct(){
        parent::__construct(); 
        $this->userModel = new UsersModel; 
        $this->hotelModel = new HotelModel; 
    }

    public function getAllImagePhotoGalerie(){
        
    }

    /** 
     * @param string $id 
     * @return array nom de l'image appartenant a l'hotel 
     */
    public function getImgByIdHotel(string $id){
        return $this->db->query('SELECT image_nom FROM images WHERE hotel_id=?', [$id])->getResult(); 
    }
    

    // ? Recuperer tout les nom des images 
    public function getAllImgNom(){

    }

    // ? Recupere lèid a apartir du nom de l'image 
    public function getIdImgByName(string $name_img){

    }

    // ? Recuperer l'image par uen date 
    public function getImgDate(string $date_post){
        
    }

    public function setImgProfile(string $pseudo, string $name_img){
        $id = $this->userModel->getIdByPseudo($pseudo);
        $this->db->query('UPDATE clients SET client_profil_img=? WHERE client_id=?', [$name_img, $id]);
    }

    /**
     * @brief 
     * @param string $id 
     */
    public function deleteImg(string $id){
        $this->db->query('query', [$id]); 
    }

}