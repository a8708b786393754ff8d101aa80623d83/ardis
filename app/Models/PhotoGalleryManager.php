<?php 
namespace App\Models; 

class PhotoGalleryManager{
    protected $imgModel;
    protected array $hotels; 
    
    public function __construct(array $allHotels){
        $this->imgModel = new ImageModel; 
        $this->hotels = $allHotels; 
    }

    /**
     * @brief Methode qui donne les rubrique est les photo associer a leur hotels
     * 
     */

    public function getAllData(){
        var_dump($this->imgModel); 

    }


    public function getRubric(){
        
    }


    // public function 

}