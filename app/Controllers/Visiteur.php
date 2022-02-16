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
            var_dump($resp); 
            if($resp){
                return redirect()->to('http://localhost/ardis/public/customers/');
                // var_dump($this->request->getPost());
            }
        }
    }

    public function mdpoublier()
    {
        $et_la = 'init'; 
        if ($this->request->getMethod()=== 'post'){
            $et_la = $this->userContr->verificate_mdp_oublier($this->request->getPost());
        }
        $this->view('mdpoublier', $et_la); 
    }

}