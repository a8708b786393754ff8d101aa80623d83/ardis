<?php 
namespace App\Models; 

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

    public function __construct()
    {
        parent::__construct(); 
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
}