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
    protected string $city; 

    private $dataCreditials; 

    public function __construct()
    {
        parent::__construct();
        $this->userManager = new UserManager;

        $this->pseudo = esc( $this->session->get('pseudo'));
        $this->dataCreditials = $this->userManager->getProfileData($this->pseudo); 

        $this->firstname = $this->dataCreditials->prenom; 
        $this->name = $this->dataCreditials->nom; 
        $this->tel = $this->dataCreditials->num_tel; 
        $this->email = $this->dataCreditials->email; 
        $this->adresse = $this->dataCreditials->adresse; 
        $this->zip_code = $this->dataCreditials->cp; 
        $this->city = $this->dataCreditials->pays; 
    }


    public function logout()
    {
        $this->session->destroy();  
        return redirect()->to('http://localhost/ardis/public/customers/');
    }

    public function profile()
    {
        // * IMPORTANT on dois verifier si la personne a une session est que le pseudo conresspond
        $this->_data['firstname']  = $this->firstname;
        $this->_data['name']  = $this->name;
        $this->_data['tel']  = $this->tel;
        $this->_data['email']  = $this->email;
        $this->_data['pseudo']  = $this->pseudo;
        $this->_data['adresse']  = $this->adresse;
        $this->_data['zip']  = $this->zip_code;
        $this->_data['city']  = $this->city;

        $this->view('profile'); 
    }
}