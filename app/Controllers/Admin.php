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
        $this->_data['name_file']  = 'hotel_admin';
        $this->_data['meta_title'] = "Operations de l'hotel".$name;

        $this->display('admin/hotel.tpl'); 
    }

}
