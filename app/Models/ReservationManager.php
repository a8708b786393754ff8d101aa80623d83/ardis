<?php 
namespace App\Models; 

class ReservationManager{
    protected HuntError $errorHunt;
    protected ReservationModel $reservMdl; 


    public function __construct(){
        $this->errorHunt = new HuntError; 
        $this->reservMdl = new ReservationModel; 
    }

    public function validateReservation(array $data){
        $error = $this->errorHunt->huntReservation($data); 
        if(empty($error)){
            $this->reservMdl->setReservation($data['startdate']); 
            var_dump('a'); 
        }return $error; 
    }

}