<?php
namespace App\Controllers;
/**
* @file Admin.php
* @author Ayoub Brahim <ayoubbrahim68@gmail.com>
* @date 14/02/2022
* @brief Controller des visiteurs 
* @details 
* <p>Les actions sont :</p>
* <ul>
* 	<li><strong>login</strong> : pour se connecter</li>
* 	<li><strong>create_account</strong> : pour créer un compte</li>
* 	<li><strong>mdpoublier</strong> : pour le mot de passe oublié</li>
* </ul>
* !changer ca 
**/

final class Admin extends Visitor{
    public function _construct(){
        parent::_construct(); 
    }
    
    public function index(){
        if($this->session->get('pseudo') !== '4dm1n4rd1s' && $this->session->get("id") === 1){
            $this->panel();             
        }else{
            $this->login();  
        }
    }
    
    public function panel(){
        $this->_data['nom_hotel'] = $this->allNamesHotels;
        $this->display('admin/admin.tpl'); 
    }
    
    public function operateHotel(string $name){
        $this->_data['color_link_nav'] = "black";
        $this->_data['name_file']  = 'hotel_admin';
        $this->_data['meta_title'] = "Operations de l'hotel".$name;

        $respQuery = $this->hotelMngr->getData($name)[0]; 
        $this->name = $respQuery->hotel_nom; 
        $this->image = $respQuery->hotel_image; 
        $this->pays = $respQuery->hotel_pays; 
        $this->price = $respQuery->hotel_price; 
        $this->note = $respQuery->hotel_note; 
        $this->contenue = $respQuery->hotel_contenue; 
        $this->email = $respQuery->hotel_mail; 
        $this->ville = $respQuery->hotel_ville; 
    
        $this->_data['name']        = $this->name;
        $this->_data['image']       = $this->image;
        $this->_data['pays']        = $this->pays;
        $this->_data['price']       = $this->price;
        $this->_data['note']        = $this->note;
        $this->_data['contenue']    = $this->contenue;
        $this->_data['email']       = $this->email;
        $this->_data['ville']       = $this->ville;


        // ! methode qui met a jour sin c'est en post

        $this->display('admin/hotel.tpl'); 
    }

}
