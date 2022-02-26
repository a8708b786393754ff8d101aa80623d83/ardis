<?php 

namespace App\Controllers; 
use App\Models\HotelManager;
use App\Models\ImageManager;

class PhotoGallery extends Pages{
    protected int $max_photo = 4; 
    protected array $allHotelNoms; 
    protected HotelManager $hotelManager; 
    protected ImageManager $ImgModel; 

    public function __construct(){
        parent::__construct(); 
        $this->hotelManager = new HotelManager; 
        $this->allHotelNoms  = $this->hotelManager->getHotelsNamesForNavBar();
        
        $this->ImgModel = new ImageManager();
    }

    public function view($page='galerie_photo'){
        $this->_data['color_link_nav'] = 'black'; 
        $this->_data['name_file']      = $page; 
        $this->_data['nav_bar_hotel']  = $this->allHotelNoms; 
        $this->_data['photo']          = $this->ImgModel->getAllData($this->allHotelNoms) ;
        $this->display($page.'.tpl');
    }
}