<?php 

namespace App\Controllers; 

class Visiteur extends Pages{
    protected $userContr;
    protected $errorHunt;

    public function __construct(){
        parent::__construct();
        $this->userContr = new UsersController;
        $this->errorHunt = new Connexion_error; 
    }

    public function login()
    {
        $error = []; 
        if ($this->request->getMethod() === 'post'){
            // verifie si la methode est bien post
            $pseudo = esc($this->request->getVar('username'));
            $passwd = esc($this->request->getVar('password')); 
            if ($pseudo !== '' && $passwd !== ''){
                $resp =  $this->userContr->verificate_login($pseudo, $passwd);
                if(!$resp){
                    $error = $this->errorHunt->hunt_error_login($this->request->getPost(), $resp); 
                }else{
                    return redirect()->to('http://localhost/ardis/public/customers/');
                }
            }
        }
        $this->view('login', $error);
    }

    public function create_account()
    {
        $error = []; 
        if ($this->request->getMethod()=== 'post'){
            $error = $this->errorHunt->hunt_error_create_account($this->request->getPost());
            if(count($error) === 0){
                $resp = $this->userContr->verificate_create_account($this->request->getPost());
                if($resp){
                    return redirect()->to('http://localhost/ardis/public/customers/');
                }
            }
        }
        var_dump($error); 
        $this->view('create_account', $error); 
    }

    public function mdpoublier()
    {
        $msg = 'init'; 
        if ($this->request->getMethod()=== 'post'){
            $resp = $this->userContr->verificate_mdp_oublier($this->request->getPost());
            $msg = $this->errorHunt->forget_password($resp);
        }
        $this->view('mdpoublier', $msg); 
    }

}