<?php 

namespace App\Controllers; 
use App\Models\UserManager;

class Visitor extends Pages{
    protected $userManager;

    public function __construct(){
        parent::__construct();
        $this->userManager = new UserManager;
    }

    public function login()
    {
        $msg = $this->userManager->verificate_login($this->request->getMethod(),  $this->session); 
        $this->_data['message'] = $msg;  
        $this->view('login');
    }

    public function create_account()
    {
        $msg = $this->userManager->verificate_create_account($this->request->getMethod()); 
        $this->_data['message'] = $msg; 
        $this->view('create_account'); 
    }

    public function mdpoublier()
    {
        $msg = $this->userManager->verificate_mdp_oublier($this->request->getMethod()); 
        $this->_data['message'] = $msg; 
        $this->view('mdpoublier'); 
    }

}