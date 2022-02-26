<?php
namespace App\Models;

define('MAX_LENGHT_FILE', 300_000); 

class ImageManager{
    protected $imgModel; 
    protected $hotelModel; 
    protected $error; 
    protected $white_liste; 
    
    public function __construct(){
        $this->imgModel = new ImageModel; 
        $this->hotelModel = new HotelModel; 
        $this->error = new HuntError; 

        $this->white_list = ["png", "webp", 'jpeg', 'jpg']; 
    }

    public function management_uplaod_img($img_file, string $pseudo){
        $img_pre_uplaoded = $img_file->getFile('photo_profile'); 
        if (! empty($img_pre_uplaoded->getFileName())){
            $error = $this->error->huntUplaodedFile($img_pre_uplaoded, MAX_LENGHT_FILE, $this->white_list); 
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
    * @brief 
    * @param  array $allHotels
    * @return array contenue des photo avec les hotels 
    */

    public function getAllData(array $allHotels, int $max=4){
        $arrImgHotels = []; 
        foreach($allHotels as $name){
            $id_hotel = $this->hotelModel->getIdByNameHotel($name)[0]->hotel_id;
            $img_name = $this->imgModel->getImgByIdHotel($id_hotel);  
            for($i=0; $i < count($img_name); $i++){
                if($max !== 0){
                    $arrImgHotels[$name][] = $img_name[$i]->image_nom; 
                }
                $max --; 
            }
        }
        return $arrImgHotels; 
    }

}