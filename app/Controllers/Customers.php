<?php 
namespace App\Controllers; 

class Customers extends Visiteur{

    protected $load; 
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
        // var_dump($conn->getName($nom)); 
        echo 'faireun truc ici';
    }
}