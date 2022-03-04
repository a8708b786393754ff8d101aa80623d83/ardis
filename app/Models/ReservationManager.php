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

    public function getResultTotalReservation(){
        // ! calcul du total
    }

    public function getResultDateReservation(string $startdate, string $enddate){
        $firstdate = new \DateTime($startdate);
        $secondDate = new \DateTime($enddate);
        return $firstdate->diff($secondDate)->d;
    }

    public function validateReservation(array $data,$pseudo){
        if(is_string($pseudo)){
            $error = $this->errorHunt->huntReservation($data); 
            if(empty($error)){
                $id_pseudo = $this->userMdl->getIdByPseudo($pseudo); 
                $resp_data = $this->reservMdl->getAllData($data['hotel_destination'], $data['nbr_lit']); 
                if(! empty($resp_data)){
                    $this->reservMdl->setReservation($data['startdate'], $data['enddate'], $id_pseudo,$resp_data[0]->chamb_num, $resp_data[0]->chamb_id, $data['activiter'], $resp_data[0]->hotel_id); 
                    return ['msg_succes', 'Votre reservation a ete pris en compte'];
                }else{
                    $error[] = "L'hotel n'est pas disponible pour ".$data['nbr_lit'].' lits'; 
                }
            }return ['msg_error',$error]; 
        }return ['error_conn', 'Veuillez vous connecter']; 
    }
}