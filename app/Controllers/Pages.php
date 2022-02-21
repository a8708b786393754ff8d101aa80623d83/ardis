<?php 
namespace App\Controllers;
use App\Models\HotelManager;

class Pages extends BaseController{
    protected $session; 
    protected $hotelMngr; 

    public function __construct(){
        $this->session = session();
        $this->hotelMngr = new HotelManager; 
        helper('url');
    }
    
    public function index()
    {
        $this->_data['color_link_nav'] = 'white';
        $this->_data['name_file']      = 'index';
        $this->_data['element']        = $this->hotelMngr->getBestHotel(); 
        $this->_data['nav_bar_hotel']  = $this->hotelMngr->getHotelsNamesForNavBar();
        $this->display();
        die; 
    }

    public function view($page)
    {
        $this->_data['color_link_nav'] = 'black'; 
        $this->_data['name_file']      = $page; 
        $this->_data['nav_bar_hotel']  = $this->hotelMngr->getHotelsNamesForNavBar();
        $this->display($page.'.tpl');
    }
}