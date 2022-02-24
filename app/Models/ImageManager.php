<?php
namespace App\Models;

define('MAX_LENGHT_FILE', 5000); 
class ImageManager{
    protected $imgModel; 
    protected $error; 
    protected $gd; 
    protected $white_liste; 
    
    public function __construct($obgjGD){
        $this->imgModel = new ImageModel; 
        $this->error = new HuntError; 
        $this->gd = $obgjGD;  
        $this->white_liste = ["png", "webp", 'jpeg', 'jpg']; 
    }

    public function management_uplaod_img($img_file, string $pseudo){
        $img_pre_uplaoded = $img_file->getFile('photo_profile'); 
        // verifie l'extension du fichier si il est bien dans la liste blanche 
        if(in_array($img_pre_uplaoded->getClientExtension(), $this->white_liste)){
            if($img_pre_uplaoded->getSize() < MAX_LENGHT_FILE){ // verifie la taille du fichier
                if($img_pre_uplaoded->isValid() && !$img_pre_uplaoded->hasMoved()){ // pour voir si le fichier est valide est qu'il a pas ete deplacer 
                    $name_rand_file = $img_pre_uplaoded->getRandomName(); // nom aleatoire 
                    $img_pre_uplaoded->move('assets/Images/profile/',$name_rand_file); //deplace le fichier 
                    $this->imgModel->setImgProfile($pseudo, $name_rand_file); //requete pour ajouter la photo au profile
                    return $name_rand_file; 
                    // TODO redimensionner l'image 
                }
                // $this->gd->
            }
        }return ''; 
        // var_dump($img_pre_uplaoded->getClientExtension()); 
        // var_dump($img_pre_uplaoded->getClientMimeType()); 
        // var_dump($img_pre_uplaoded->getRandomName()); 

        // $this->img_manip->withFile('assets/Images/background.jpg')
        // ->resize(100, 100,true, 'auto')
        // ->convert(IMAGETYPE_WEBP); 
        // var_dump($img_pre_uplaoded->isValid()); 
    }

    
}