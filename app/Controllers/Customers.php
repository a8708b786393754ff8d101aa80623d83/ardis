<?php 
namespace App\Controllers; 

class Customers extends Visiteur{

    public function __construct()
    {
        parent::__construct();
    }
    public function logout()
    {
        $this->session->destroy();  // le tester  
        return redirect()->to('http://localhost/ardis/public/customers/');
    }

    public function profile($nom)
    {
        $conn = new UsersController(); 
        echo 'faireun truc ici';
    }
}