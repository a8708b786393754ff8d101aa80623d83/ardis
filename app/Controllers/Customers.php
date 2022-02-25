<?php 
namespace App\Controllers; 
use App\Models\CustomerManager;
use App\Models\ImageManager;

class Customers extends Visitor{
    protected $img_manip;
    protected $imgManager;
    
    protected string $pseudo;
    protected string $firstname; 
    protected string $name; 
    protected string $tel; 
    protected string $email; 
    protected string $adresse; 
    protected string $zip_code; 
    protected string $city; 
    protected string $civ; 
    protected string $photo_profile; 
    protected  $id; 
    
    private $dataCreditials; 

    public function __construct()
    {
        parent::__construct();
        $this->CustomerManager = new CustomerManager;
        $this->img_manip = \Config\Services::image();
        $this->imgManager = new ImageManager($this->img_manip);
        $this->pseudo = $this->session->pseudo;
        $this->id = $this->session->id;
    }
    
    
    protected function hydrate(){
        $objResp = $this->dataCreditials = $this->CustomerManager->getProfileData($this->id);
        $this->session->set('pseudo', $objResp->pseudo);

        $this->firstname = $objResp->prenom; 
        $this->name = $objResp->nom; 
        $this->tel = $objResp->num_tel; 
        $this->email = $objResp->email; 
        $this->adresse = $objResp->adresse; 
        $this->zip_code = $objResp->cp; 
        $this->city = $objResp->pays; 
        $this->photo_profile = $objResp->img_profile; 
        $this->civ = $objResp->civ; 
    }

    public function logout()
    {
        $this->session->destroy();  
        return redirect()->to('http://localhost/ardis/public/customers/');
    }


    public function profile(){
        $this->hydrate();
        // * IMPORTANT on dois verifier si la personne a une session est que le pseudo conresspond
        $this->_data['firstname']  = $this->firstname;
        $this->_data['name']  = $this->name;
        $this->_data['tel']  = $this->tel;
        $this->_data['email']  = $this->email;
        $this->_data['pseudo']  = $this->pseudo;
        $this->_data['adresse']  = $this->adresse;
        $this->_data['zip']  = $this->zip_code;
        $this->_data['city']  = $this->city;
        $this->_data['photo_profile']  = $this->CustomerManager->managerImgProfile($this->civ, $this->photo_profile, $this->id);
        $this->view('profile'); 
    }
    
    public function edite_profile(){
        $this->hydrate();
        $resp = $this->CustomerManager->is_up_to_date($this->pseudo, $this->request,$this->id,  
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
        $this->_data["msg_error"] = $this->imgManager->management_uplaod_img($this->request, $this->pseudo);
        $this->profile(); 
    }
    
    public function delete_profile(){
        $this->CustomerManager->delete_user_data($this->pseudo, $this->session); 
        return redirect()->to('http://localhost/ardis/public/pages/');
    }

}