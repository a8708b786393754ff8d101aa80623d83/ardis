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
        if ($this->request->getMethod()=== 'post'){
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
        $this->view('login');
    }

    public function create_account()
    {
        $this->view('create_account'); 
        if ($this->request->getMethod()=== 'post'){
            $resp = $this->userContr->verificate_create_account($this->request->getPost());
            if(\is_array($resp)){
                return redirect()->to('http://localhost/ardis/public/customers/');
                // var_dump($this->request->getPost());
            }echo 'Vous avez deja un compte'; 
        }
    }

    public function mdpoublier()
    {

    }

}