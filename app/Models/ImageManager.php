<?php
namespace App\Models;

define('MAX_LENGHT_FILE', 100_100); 

class ImageManager{
    protected $imgModel; 
    protected $error; 
    protected $gd; 
    protected $white_liste; 
    
    public function __construct($obgjGD){
        $this->imgModel = new ImageModel; 
        $this->error = new HuntError; 
        $this->gd = $obgjGD;  
        $this->white_list = ["png", "webp", 'jpeg', 'jpg']; 
    }
    public function management_uplaod_img($img_file, string $pseudo){
        $img_pre_uplaoded = $img_file->getFile('photo_profile'); 
        if (! empty($img_pre_uplaoded->getFileName())){
            $error = $this->error->huntUplaodedFile($img_pre_uplaoded, MAX_LENGHT_FILE, $this->white_list); 
            var_dump($error); 
            if(count($error) === 0 ){
                $name_rand_file = $img_pre_uplaoded->getRandomName(); // nom aleatoire 
                $img_pre_uplaoded->move('assets/Images/profile/',$name_rand_file); //deplace le fichier 
                $this->imgModel->setImgProfile($pseudo, $name_rand_file); 
            }else{
                return $error; 
            }
        }
    }


    /**
     * @param  $img
     * @param int $max_length
     * @return array contentant les erruer
     */
    
}