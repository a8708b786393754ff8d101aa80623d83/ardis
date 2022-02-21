<?php 
namespace App\Models; 
use App\Models\HotelModel;

class HotelManager {
    private $respQuery; 
    public function __construct()
    {
        $this->respQuery = new HotelModel(); 
    }

    public function getData($page)
    {
        return $this->respQuery->getAll($page); 
    }

    public function getName()
    {
        return $this->respQuery->getName(); 
    }

    public function getBestHotel(){
        return $this->respQuery->getBestHotels(); 
    }
}