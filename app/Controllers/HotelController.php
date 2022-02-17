<?php 
namespace App\Controllers; 
use App\Models\HotelModel;

class HotelController extends Pages{
    public function getAllInfo(string $hotel)
    {
        return $this->conn->getAll($hotel); 
    }

    public function getName()
    {
        var_dump($this->helpers);
        $this->setLayoutHotels($this->conn->getName()); 
    }

    private function setLayoutHotels($data){
        $this->_data['hotels'] = $data; 
    }

}
