<?php 
namespace App\Models; 
use CodeIgniter\Model; 

class ImageModel extends Model{
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

    protected $userModel; 

    public function __construct()
    {
        parent::__construct(); 
        $this->userModel = new UsersModel; 
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
        $id = $this->userModel->getIdBeyPsudo($pseudo);
        $this->db->query('UPDATE clients SET client_profil_img=? WHERE client_id=?', [$name_img, $id]);
    }

}