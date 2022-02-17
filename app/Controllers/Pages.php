<?php 
namespace App\Controllers;
use App\Models\HotelModel;

class Pages extends BaseController{
    protected $session; 
    protected $hotelCtrl; 
    protected $conn; 

    public function __construct(){
        $this->session = session();
        $this->conn = new HotelModel; 
        helper('url');
    }

    public function index()
    {
        $this->_data['color_link_nav'] = 'white';
        $this->_data['name_file'] = 'index';
        $this->_data['element'] = $this->conn->getBestHotels(); 
        $this->display();
        die; 
    }

    public function view($page)
    {
        $this->_data['color_link_nav'] = 'black'; 
        $this->_data['name_file']      = $page; 
        $this->display($page.'.tpl');
    }
}