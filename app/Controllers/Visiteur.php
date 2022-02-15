<?php 

namespace App\Controllers; 

class Visiteur extends Pages{
    protected $userContr;

    public function __construct(){
        parent::__construct();
        $this->userContr = new UsersController;
    }

    public function login()
    {
        $this->view('login');
        if ($this->request->getMethod() === 'post'){
            // verifie si la methode est bien post
            $pseudo = esc($this->request->getVar('username'));
            $passwd = esc($this->request->getVar('password')); 
            if ($pseudo !== '' && $passwd !== ''){
                if(! $this->userContr->verificate_login($pseudo, $passwd)){
                    //code d'erruer
                }
                return redirect()->to('http://localhost/ardis/public/customers/');
            }
        }
    }

    public function create_account()
    {
        $this->view('create_account'); 
        if ($this->request->getMethod()=== 'post'){
            $resp = $this->userContr->verificate_create_account($this->request->getPost());
            if(is_array($resp)){
                return redirect()->to('http://localhost/ardis/public/customers/');
                // var_dump($this->request->getPost());
            }
        }
    }

    public function mdpoublier()
    {
        $this->view('mdpoublier'); 
        if ($this->request->getMethod()=== 'post'){
            $resp = $this->userContr->verificate_mdp_oublier($this->request->getPost());
            if(is_array($resp) && count($resp) === 1){
                echo 'Un email vous a été envoyer'; 
                // code d'envoye email
                //le dire a l'utilisateur le email il va bientot arriver 
            }else{
                echo 'Vous n"avez pas de compte'; 
            }
        }
    }

}