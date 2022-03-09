<?php
namespace App\Controllers;
/**
* @file Admin.php
* @author Ayoub Brahim <ayoubbrahim68@gmail.com>
* @date 14/02/2022
* @brief Controller de l'admin 
* @details 
* <p>Les actions sont :</p>
* <ul>
* 	<li><strong>operateUser</strong> : operateur lier au utilisateur</li>
* </ul>
**/

final class Admin extends Moderateur{
    protected $tel;

    /**
    * @brief Méthode constructrice 
    * @details 
    * <p>Cette méthode appelle la méthode constructrice de la classe Moderateur</p>
    **/
    public function _construct(){
        parent::_construct();  
    }

    /**
    * @brief Méthode index 
    * @details 
    * <p>Cette méthode verifie la session de l'utilisateur(son pseudo est l'id).</p>
    * <p>Si celui la a les bon droit, il serat rediregirer vers la page de panel, sinon a la page de login</p>
    **/
    public function index(){
        if($this->session->get('pseudo') !== '4dm1n4rd1s' && $this->session->get("id") === 1){ // changer est tester sur les role
            $this->panel();             
        }else{
            $this->login();  
        }
    }


    /**
    * @brief Méthode pour les operateur des utilisateur 
    * @details 
    * <p>Cette méthode sert pour les operation de sur les utilisateur (pour cette version c'est que la suppression).</p>
    **/
    public function operateUser(){

        if($this->request->getMethod() === 'post'){
            $this->userManager->deleteUser($this->request->getVar('pseudo'));  
        }
        $this->_data['color_link_nav'] = "black";
        $this->_data['name_file']      = 'operate_user';
        $this->_data['meta_title']     = "Gestion des comptes";

        $this->_data['all_user_creditials'] = $this->userManager->getAllUserFromAdmin(); 
        $this->display('admin/users.tpl'); 
    }
}
