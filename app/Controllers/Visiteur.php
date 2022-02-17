<?php 

namespace App\Controllers; 
use App\Models\UserManager;

class Visiteur extends Pages{
    private $userManager;
    private $errorHunt;

    public function __construct(){
        parent::__construct();
        $this->userManager = new UserManager;
    }

    public function login()
    {
        $mesg = $this->userManager->verificate_login($this->request->getMethod());
        var_dump($this->session); 
        $this->_data['message'] = $mesg;  
        $this->view('login');
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