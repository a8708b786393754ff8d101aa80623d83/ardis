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
* 	<li><strong>panel</strong> : le panel admin</li>
* 	<li><strong>operateHotel</strong> :tout les operation lier aux hotels</li>
* 	<li><strong>mdpoublier</strong> : pour le mot de passe oublié</li>
* </ul>
**/

final class Admin extends Moderateur{
    protected $tel;

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


    public function operateUser(){

        if($this->request->getMethod() === 'post'){
            $this->userManager->deleteUser($this->request->getVar('pseudo'));  
            // ! redirection a cette page
        }
        $this->_data['color_link_nav'] = "black";
        $this->_data['name_file']      = 'operate_user';
        $this->_data['meta_title']     = "Gestion des comptes";

        $this->_data['all_user_creditials'] = $this->userManager->getAllUserFromAdmin(); 
        $this->display('admin/users.tpl'); 
    }
}
