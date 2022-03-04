<?php
namespace App\Controllers;
use App\Models\ActiviterModel;

class MiniApiArdis extends BaseController{
    private $activMdl ;

    public function __construct(){
        $this->activMdl = new ActiviterModel;    
    }
    public function getActivByName(){
        if($this->request->getMethod() === 'get'){
            $data=$this->request->getVar('hotel_name');
            if(isset($data)) {
                echo  json_encode($this->activMdl->getActivByHotelReserv($data));
            }
            
        }
    }
}
?>