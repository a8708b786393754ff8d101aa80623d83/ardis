<?php 
namespace App\Controllers; 
use App\Models\HotelModel;

class HotelController {
    private array $bestHotel; 
    private $conn; 

    public function __construct()
    {
        $this->conn = new HotelModel; 
    }

    public function index(): array 
    {
        return $this->conn->getBestHotels(); 
    }

}
