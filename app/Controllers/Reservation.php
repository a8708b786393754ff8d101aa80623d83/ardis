<?php 
namespace App\Controllers; 
use App\Models\ReservationManager;
/**
* @file Customers.php
* @author Ayoub Brahim <ayoubbrahim68@gmail.com>
* @date 21/02/2022
* @brief Controller des clients connectés 
* @details 
* <p>Les actions sont :</p>
* <ul>
* 	<li><strong>logout</strong> : se déconnecte du compte courant</li>
* </ul>
**/

class Reservation extends Visitor{
    protected $reservMngr; 
    /**
    * @brief Méthode constructrice 
    * @details 
    * <p>Cette méthode appelle la méthode constructrice de la classe Visitor</p>
    **/
    public function __construct(){
        $this->reservMngr = new ReservationManager; 
        $this->_data['color_link_nav'] = 'black';
        parent::__construct();
    }
    
    public function index(){
        $this->_data['name_file']      = 'reservation';
        $this->_data['meta_title']     = 'Reservation'; 
        $this->display('reservation.tpl'); 
    }

    public function validation(){
        $this->_data['name_file']      = 'validation_reservation';
        $this->_data['meta_title']     = 'Validation de reservation'; 
        $resp = $this->reservMngr->validateReservation($this->request->getPost());
        // $this->_data[$resp[0]]      = $resp[1]; 
        $this->display('reservation_validation.tpl'); 
    }


   
}