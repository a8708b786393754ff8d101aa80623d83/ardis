<?php 
namespace App\Controllers; 

class Hotel extends Pages{
    protected string $name;
    protected string $image;
    protected string $pays;
    protected string $price;
    protected string $ville;
    protected string $note;
    protected string $contenue;
    protected string $email;

    public function __construct()
    {   
        parent::__construct(); 
    }
    
    public function view($page)
    {
        $respQuery = $this->hotelMngr->getData($page)[0]; 
        
        $this->name = $respQuery->hotel_nom; 
        $this->image = $respQuery->hotel_image; 
        $this->pays = $respQuery->hote_pays; 
        $this->price = $respQuery->hotel_price; 
        $this->note = $respQuery->hotel_note; 
        $this->contenue = $respQuery->hotel_contenue; 
        
        
        
        $this->_data['color_link_nav'] = 'black'; 
        $this->_data['name_file']      = $page; 
        $this->_data['hotel_info']     = $this->hotelMngr->getData($page); 
        $this->_data['nav_bar_hotel']  = $this->hotelMngr->getHotelsNamesForNavBar();
        $this->display($page.'.tpl');
    }

}