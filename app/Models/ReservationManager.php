<?php 
namespace App\Models; 
use App\Libraries\HuntError; 
/**
* @file ReservationManager.php
* @author Ayoub Brahim
* @date 10/02/2022
* @brief Manager pour la reservation
*  @details 
* <p>Cette classe gére toute la logique pour executer la bonne requete</p>
**/

class ReservationManager{
    protected HuntError $errorHunt;
    protected ReservationModel $reservMdl; 
    protected UsersModel $userMdl; 
    protected HotelModel $hotelMdl; 

    /**
    * @brief Méthode constructrice 
    * @details 
    * <p>La méthode constructrice initialise la classe UsersModel,HuntError,HotelModel, RservationModel. </p>
    **/
    public function __construct(){
        $this->errorHunt = new HuntError; 
        $this->reservMdl = new ReservationModel; 
        $this->userMdl   = new UsersModel; 
        $this->hotelMdl  = new HotelModel; 
    }

     /**
    * @brief Methode qui  calcul le prix total de la reservation    
    * @details 
    * <p>Execute la requete pour recupere le prix de l'hotel.</p>
    * <p>Le prix de l'activiter n'est pas pris au compte si elle est de 0</p>
    * @param  string $durer_total
    * @param  string $activ_price
    * @param  string $name_hotel
    * @return int total de la reservation
    **/
    public function getResultTotalReservation(string $durer_total, string $activ_price, string $name_hotel): int{
        $price_hotel = $this->hotelMdl->getPriceHotelByName($name_hotel)[0]->price;
        if($activ_price !== 0){
            return ($activ_price + $price_hotel) * $durer_total;  
        }return $price_hotel * $durer_total;
    }

     /**
    * @brief Methode qui donne la diffirence  de la date de debut est de fin de la reservation 
    * @param  string $startdate
    * @param  string $enddate
    * @return string jour de difference 
    **/
    public function getResultDateReservation(string $startdate, string $enddate): string{
        $firstdate = new \DateTime($startdate);
        $secondDate = new \DateTime($enddate);
        return $firstdate->diff($secondDate)->d; // renvoie le nombre de jours 
    }

    /**
    * @brief Methode qui valide ou pas la reservation     
    * @details 
    * <p>La methode verifie si il n'y a pas d'erreur dans les champs entre zpar l'utilisateur </p>
    * <p>Si les entrez sont correct, on recupere l'id du pseudo est les reservation disponible.</p>
    * <p>Si il'y a des reservation disponible,on ajoute la reservation a l'utilisateur est les activiters (si il y en a). </p>
    * @param  array $data
    * @param  string $pseudo
    * @return array| Contient le type de message est son contenue 
    **/
    public function validateReservation(array $data, string $pseudo): array{
        $error = $this->errorHunt->huntReservation($data); 

        if(empty($error)){ // si il y aucune erreur
            $id_pseudo = $this->userMdl->getIdByPseudo($pseudo); 
            $resp_data = $this->reservMdl->getAllData($data['hotel_destination'], $data['nbr_lit']); 
            if(! empty($resp_data)){
                $this->reservMdl->setChambNoDisponible($resp_data[0]->chamb_id); 
                if($data['activiter'] === "non"){ // pour voir si il a choisi une activiter
                    $this->reservMdl->setReservationWithouthActiv($data['startdate'], $data['enddate'], $id_pseudo, $resp_data[0]->chamb_num, $resp_data[0]->chamb_id, $resp_data[0]->hotel_id); 
                }else{
                    $this->reservMdl->setReservationWithActiv($data['startdate'], $data['enddate'], $id_pseudo, $resp_data[0]->chamb_num, $resp_data[0]->chamb_id, $resp_data[0]->hotel_id,$data['activiter']); 
                }return ['msg_succes', 'Votre reservation a ete pris en compte'];
            }else{
                $error[] = "L'hotel n'est pas disponible pour ".$data['nbr_lit'].' lits'; 
            }
        }return ['msg_error',$error]; 
    }

     /**
    * @brief Methode qui execute des requete pour recuperer le nombre de chambre   
    * @details 
    * <p>Recuperer l'id du client via l'id du client.</p>
    * @param  string $id_pseudo
    * @param  string $date_deb
    * @return array numero(s) de(s) chambre(s) 
    **/
    public function getChambNum(string $id_pseudo, string $date_deb):array{
        $id_client = $this->userMdl->getIdByClientByIdPseudo($id_pseudo);
        return $this->reservMdl->getChambNumByIdClient($id_client, $date_deb); 
    }

    /**
    * @brief Methode qui donne les reservation au client
    * @details 
    * <p>Elle recuperer les reservations du client de l'hotel.</p>
    * <p>Renvoie faux si il y a pas de reservation.</p>
    * @param  string $name_client
    * @return array|false false ou les reservation est nom d'hotel.
    **/
    public function getYourReservationNumberNameHotel(string $name_client){
        // cette methode donne les reservation de l'utilisateur
        $reservAchieve = $this->reservMdl->getUserReservation($name_client);
        if(! empty($reservAchieve)){
            return $reservAchieve; 
        }return false; 

    }
}