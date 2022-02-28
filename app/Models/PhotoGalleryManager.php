<?php 
namespace App\Models; 

class PhotoGalleryManager{
    protected $imgModel;
    protected array $hotels; 
    
    public function __construct(array $allHotels){
        $this->imgModel = new ImageModel; 
        $this->hotels = $allHotels; 
    }

    // l'utiliser pour l'adminstateur


}