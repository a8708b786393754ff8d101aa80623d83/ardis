<?php 
namespace App\Controllers; 

class Customers extends Visiteur{

    public function __construct()
    {
        parent::__construct();

    }
    public function logout()
    {
        $this->session->destroy(); header('Location: pages/index'); // le tester  
    }

    public function profile($nom)
    {
        $conn = new UsersController(); 
        // var_dump($conn->getName($nom)); 
        echo 'faireun truc ici';
    }
}