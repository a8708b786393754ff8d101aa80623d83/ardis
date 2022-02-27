<?php 
namespace App\Controllers; 
use App\Models\UserManager;
/**
* @file Visitor.php
* @author Ayoub Brahim <ayoubbrahim68@gmail.com>
* @date 14/02/2022
* @brief Controller des visiteur 
* @details 
* <p>Les actions sont :</p>
* <ul>
* 	<li><strong>login</strong> : pour se connecter</li>
* 	<li><strong>create_account</strong> : pour creer un compte</li>
* 	<li><strong>mdpoublier</strong> : pour l'oubliation du mot de passe</li>
* </ul>
**/

class Visitor extends Pages{
    protected $userManager;

    /**
    * @brief Methode constructrice 
    * @details 
    * <p>Cette methode constructrice appelle la methode constructrice de la classe Pages</p>
    * <p>La methode constructrice initialise la classe UserManager </p>
    **/
    public function __construct(){
        parent::__construct();
        $this->userManager = new UserManager;
    }

    /**
    * @brief Methode login
    * @details
    * <p>Elle recuperer les erruer lier a la connection, elle envoie le message d'erruer
    *            a smarty, si il'y en a pas elle redirige le client vers sa page de profile </p>
    */
    public function login(){
        $msg = $this->userManager->verificate_login($this->request->getMethod(),  $this->session, redirect());
        if($msg === true){
            return redirect()->to('http://localhost/ardis/public/customers/profile/'); 
        }
        $this->_data['message'] = $msg;  
        $this->view('login');
    }

    /**
    * @brief Methode create_account
    * @details
    * <p>Elle recuperer les message  de succes/d'erruer lier a la creation du compte , elle envoie le message a smarty </p>
    */
    public function create_account(){
        $msg = $this->userManager->verificate_create_account($this->request->getMethod());
        // l'index 0 est pour le type de message (erruer ou de succes)
        // l'index 1 est pour le(s) message(s)
        $this->_data[$msg[0]]       = $msg[1]; 
        $this->view('create_account'); 
    }

     /**
    * @brief Methode mdpoublier
    * @details
    * <p>Elle recuperer les message d'erruer/de succes lier a l'oublie du mot de passe , elle envoie le a smarty </p>
    */
    public function mdpoublier(){
        $msg = $this->userManager->verificate_mdp_oublier($this->request->getMethod()); 
        $this->_data['message'] = $msg; 
        $this->view('mdpoublier'); 
    }
}