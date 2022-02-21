<?php 
namespace App\Controllers; 
use App\Models\UserManager;

class Customers extends Visitor{
    protected string $pseudo; 
    protected string $firstname; 
    protected string $name; 
    protected string $tel; 
    protected string $email; 
    protected string $adresse; 
    protected string $zip_code; 

    public function __construct()
    {
        parent::__construct();
        $this->userManager = new UserManager;
    }

    
    public function logout()
    {
        $this->session->destroy();  // le tester  
        return redirect()->to('http://localhost/ardis/public/customers/');
    }

    public function profile()
    {

        // * IMPORTANT on dois verifier si la personne a une session est que le pseudo conresspond
        $this->session->get('pseudo');


        $this->view('profile'); 
    }

    public function  edit_profile()
    {
        $this->view('modif_profile'); 
    }
}