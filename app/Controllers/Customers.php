<?php 
namespace App\Controllers; 
use App\Models\CustomerManager;

class Customers extends Visitor{
    protected $img_manip;
    protected string $pseudo; 
    protected string $firstname; 
    protected string $name; 
    protected string $tel; 
    protected string $email; 
    protected string $adresse; 
    protected string $zip_code; 
    protected string $city; 
    protected string $photo_profile; 

    private $dataCreditials; 

    public function __construct()
    {
        parent::__construct();
        $this->CustomerManager = new CustomerManager;
        $this->img_manip = \Config\Services::image();


        $this->pseudo = $this->session->get('pseudo');
        $this->dataCreditials = $this->CustomerManager->getProfileData($this->pseudo); 

        $this->firstname = $this->dataCreditials->prenom; 
        $this->name = $this->dataCreditials->nom; 
        $this->tel = $this->dataCreditials->num_tel; 
        $this->email = $this->dataCreditials->email; 
        $this->adresse = $this->dataCreditials->adresse; 
        $this->zip_code = $this->dataCreditials->cp; 
        $this->city = $this->dataCreditials->pays; 
        $this->photo_profile = ''; 
        // TODO ajouter la photo de profile est faire un test dans 
    }


    public function logout()
    {
        $this->session->destroy();  
        return redirect()->to('http://localhost/ardis/public/customers/');
    }

    public function profile(){
        // * IMPORTANT on dois verifier si la personne a une session est que le pseudo conresspond

        $this->_data['firstname']  = $this->firstname;
        $this->_data['name']  = $this->name;
        $this->_data['tel']  = $this->tel;
        $this->_data['email']  = $this->email;
        $this->_data['pseudo']  = $this->pseudo;
        $this->_data['adresse']  = $this->adresse;
        $this->_data['zip']  = $this->zip_code;
        $this->_data['city']  = $this->city;
        $this->_data['photo_profile']  = $this->photo_profile;

        $this->view('profile'); 
    }

    public function edite_profile(){
        $resp = $this->CustomerManager->is_up_to_date($this->pseudo, $this->request, 
        [
            'pseudo'=>$this->pseudo,
            'prenom'=>$this->firstname,
            'nom'=>$this->name,
            'tel'=>$this->tel,
            'email'=>$this->email,
            'adresse'=>$this->adresse,
            'cp'=>$this->zip_code,
            'pays'=>$this->city,
            'photo_profile'=>$this->photo_profile,
        ]    
        ); 
        $this->_data[$resp[0]] = $resp[1];
        $this->profile();
    }

    public function delete_profile(){
        $this->CustomerManager->delete_user_data($this->pseudo, $this->session); 
        return redirect()->to('http://localhost/ardis/public/pages/');
    }

    // ! test 
    public function test(){
        $this->img_manip->withFile('assets/Images/background.jpg')
        ->resize(100, 100,true, 'auto')
        ->convert(IMAGETYPE_WEBP)
        ->save('assets/Images/background_test.webp');

        var_dump($this->img_manip->getProperties(true)); 
    }
}