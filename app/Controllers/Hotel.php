<?php 
namespace App\Controllers; 
use App\Models\HotelManager;

class Hotel extends Pages{
    private $hotelManager; 
    public function __construct()
    {   
        $this->hotelManager = new HotelManager; 
    }
    public function view($page)
    {
        $this->_data['color_link_nav'] = 'black'; 
        $this->_data['name_file']      = $page; 
        $this->_data['hotel_info']     = $this->hotelManager->getData($page); 
        $this->display($page.'.tpl');
    }
}

//Carlos