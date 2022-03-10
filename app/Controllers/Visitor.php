<?php 
namespace App\Controllers; 
use App\Models\UserManager;
/**
* @file Visitor.php
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
**/

class Visitor extends Pages{
    protected $userManager;
    /**
    * @brief Méthode constructrice 
    * @details 
    * <p>Cette méthode appelle la méthode constructrice de la classe Pages</p>
    * <p>La méthode constructrice initialise la classe UserManager </p>
    **/
    public function __construct(){
        parent::__construct();
        $this->userManager = new UserManager;
    }

    /**
    * @brief Méthode login
    * @details
    * <p>Elle récupére les erreurs liés à la connection et les envoie 
    *            à Smarty, si il n'y en a pas elle redirige le client vers sa page de profil </p>
    */
    public function login(){
        $msg = $this->userManager->verificateLogin($this->request,  $this->session);
        if($msg === true){
            return redirect()->to('http://localhost/ardis/public/customers/profile/'); 
        }
        $this->_data['message'] = $msg;  
        $this->view('login');
    }

    /**
    * @brief Méthode create_account
    * @details
    * <p>Elle récupére les messages de succès/d'erreurs liés à la création du compte et les envoie à Smarty </p>
    */
    public function create_account(){
        $msg = $this->userManager->verificateCreateAccount($this->request);
        // ! ajouter un test pour l'envoie de l'email pour recuperer 
        // l'index 0 est pour le type de message (d'erreurs ou de succès)
        // l'index 1 est pour le(s) message(s)
        $this->_data[$msg[0]] = $msg[1]; 
        $this->view('create_account'); 
    }

    /**
    * @brief Méthode mdpoublier
    * @details
    * <p>Elle récupére les messages d'erreurs/de succès liés à l'oublie du mot de passe et les envoie à Smarty </p>
    */
    public function mdpoublier(){
        $msg = $this->userManager->verificateMdpOublier($this->request); 
        $this->_data['message'] = $msg; 
        $this->view('mdpoublier'); 
    }

}