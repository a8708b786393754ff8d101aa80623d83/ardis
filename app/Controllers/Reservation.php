<?php 
namespace App\Controllers; 
use App\Models\ReservationManager;
use App\Models\ActiviterManager;
/**
* @file Reservation.php
* @author Ayoub Brahim <ayoubbrahim68@gmail.com>
* @date 01/03/2022
* @brief Controller des reservations
* @details 
* <p>Les actions sont :</p>
* <ul>
* 	<li><strong>index</strong>: affiche la page de reservation</li>
* 	<li><strong>recu</strong>: affiche la page de recu</li>
* </ul>
**/

class Reservation extends Pages{
    protected $reservMngr; 
    protected $activMngr; 

    /**
    * @brief Méthode constructrice 
    * @details 
    * <p>Cette méthode appelle la méthode constructrice de la classe Pages</p>
    * <p>Elle instancie la classe ReservationManager est ActiviterManager</p>
    **/
    public function __construct(){
        parent::__construct();
        $this->_data['color_link_nav'] = 'black';
        
        $this->reservMngr = new ReservationManager; 
        $this->activMngr = new ActiviterManager($this->allNamesHotels); 
    }
    

    /**
    * @brief Méthode index 
    * @details 
    * <p>Cette méthode passe le meta title est le nom du fichier a smarty</p>
    **/
    public function index(){
        $this->_data['name_file']      = 'reservation';
        $this->_data['meta_title']     = 'Reservation'; 
        $this->display('reservation.tpl'); 
    }


    // throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    /**
    * @brief Méthode qui affiche le recus de la reservation 
    * @details 
    * <p>Cette méthode passe les information du client est les information de la reservation a smarty</p>
    **/
    public function recus(){
        $this->_data['name_file']     = 'validation_reservation';
        $this->_data['meta_title']    = 'Recus de votre reservation';

        // le bloc try catch c'est pour eviter les erruer si il est pas connecter. 
        try{
            $resp = $this->reservMngr->validateReservation($this->request->getPost(), $this->session->get('pseudo'));
            $this->_data[$resp[0]]       = $resp[1]; // type de message est son contenue
            $this->_data['nom']          = $this->session->get('nom');
            $this->_data['prenom']       = $this->session->get('prenom');

            $this->_data['startdate']    = $this->request->getVar('startdate');
            $this->_data['enddate']      = $this->request->getVar('enddate');
            $this->_data['durer']        = $this->reservMngr->getResultDateReservation($this->request->getVar('startdate'), $this->request->getVar('enddate'));
            $this->_data['hotel_sejour'] = $this->request->getVar('hotel_destination');
            $this->_data['num_chamb']    = $this->reservMngr->getChambNum($this->session->get('id'), $this->_data['startdate']); 
            
            $this->_data['activiter']         = $this->request->getVar('activiter');
            $this->_data['activiter_price']   = $this->activMngr->getPriceActiv($this->_data['activiter']); 
            
            $this->_data['price_total']  = $this->reservMngr->getResultTotalReservation($this->_data['durer'], $this->_data['activiter_price'], $this->request->getVar('hotel_destination')); 
        }catch (\Throwable $th) {
            // none
        }finally{
            $this->display('recus.tpl');    
        }
    }
}