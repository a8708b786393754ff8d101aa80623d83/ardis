<?php 
namespace App\Controllers; 

class Customers extends Visiteur{
    public function logout()
    {
        session_destroy();header('Location: pages');die; // le tester  
    }

    public function profile($nom)
    {
        $conn = new UsersController(); 
        var_dump($conn->getName($nom)); 
        echo 'faireun truc ici';
    }
}