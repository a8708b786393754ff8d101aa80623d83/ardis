<?php 
namespace App\Models; 

class ReservationManager{
    protected HuntError $errorHunt;
    protected ReservationModel $reservMdl; 
    protected UsersModel $userMdl; 


    public function __construct(){
        $this->errorHunt = new HuntError; 
        $this->reservMdl = new ReservationModel; 
        $this->userMdl = new UsersModel; 
    }



    public function validateReservation(array $data,$pseudo){
        if(is_string($pseudo)){
            $error = $this->errorHunt->huntReservation($data); 
            if(empty($error)){
                $id_pseudo = $this->userMdl->getIdByPseudo($pseudo); 
                $resp_data = $this->reservMdl->getAllData($data['hotel_destination'], $data['nbr_lit']); 
                if(! empty($resp_data)){
                    $this->reservMdl->setReservation($data['startdate'], $data['enddate'], $id_pseudo,$resp_data[0]->chamb_num, $resp_data[0]->chamb_id, $resp_data[0]->activ_id, $resp_data[0]->hotel_id); 
                    return ['msg_succes', 'Votre reservation a ete pris en compte'];
                }else{
                    $error[] = 'Une erruer est survenue, veuillez reesayer'; 
                }
            }return ['msg_error',$error]; 
        }return ['error_conn', 'Veuillez vous connecter']; 
    }

}