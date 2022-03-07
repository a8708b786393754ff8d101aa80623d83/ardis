<?php 
namespace App\Models; 
use App\Libraries\HuntError; 

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

    public function getResultDateReservation(string $startdate, string $enddate): string{
        $firstdate = new \DateTime($startdate);
        $secondDate = new \DateTime($enddate);
        return $firstdate->diff($secondDate)->d; // renvoie le nombre de jours 
    }

    public function validateReservation(array $data,$pseudo): array{
        if(is_string($pseudo)){
            $error = $this->errorHunt->huntReservation($data); 
            if(empty($error)){
                $id_pseudo = $this->userMdl->getIdByPseudo($pseudo); 
                $resp_data = $this->reservMdl->getAllData($data['hotel_destination'], $data['nbr_lit']); 
                if(! empty($resp_data)){
                    if($data['activiter'] === "non"){ // pour voir si il a choisi une activiter
                        $this->reservMdl->setReservationWithouthActiv($data['startdate'], $data['enddate'], $id_pseudo, $resp_data[0]->chamb_num, $resp_data[0]->chamb_id, $resp_data[0]->hotel_id); 
                    }else{
                        $this->reservMdl->setReservationWithActiv($data['startdate'], $data['enddate'], $id_pseudo, $resp_data[0]->chamb_num, $resp_data[0]->chamb_id, $resp_data[0]->hotel_id,$data['activiter']); 
                    }
                    return ['msg_succes', 'Votre reservation a ete pris en compte'];
                }else{
                    $error[] = "L'hotel n'est pas disponible pour ".$data['nbr_lit'].' lits'; 
                }
            }return ['msg_error',$error]; 
        }return ['error_conn', 'Veuillez vous connecter']; 
    }

    public function getChambNum(string $id_pseudo){
        $id_client = $this->userMdl->getIdByClientByIdPseudo($id_pseudo);
        return $this->reservMdl->getChambNumByIdClient($id_pseudo)[0]->chamb_num; 
    }


    public function getYourReservationNumberNameHotel(string $name_client){
        $reservAchieve = $this->reservMdl->getUserReservation($name_client);
        if(! empty($reservAchieve)){
            return $reservAchieve; 
        }return false; 

    }
}