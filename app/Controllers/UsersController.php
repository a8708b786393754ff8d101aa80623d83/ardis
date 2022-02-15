<?php 
namespace App\Controllers; 
use App\Models\UsersModel;

class UsersController extends Pages{
    private $conn; 

    public function __construct(){
        $this->conn = new UsersModel();
        parent::__construct();
    }

    // qui va gerer le verification : RENVoie un boolean 
    public function verificate_login(string $pseudo, string $passwd): bool
    {
        $resp = $this->conn->getPseudo($pseudo, $passwd);

        //verifie sic'est une tbaleau est que  
        if (is_array($resp) && isset($resp[0]->name)){ 
            $this->session->set([
                    'pseudo'=>$resp[0]->name
                    ]); 
            return true; 
        }
        return false; 
    }

    public function verificate_create_account(array $data){
        // verifie si la longeur des element du post sont a 10
        if (count($data) === 10){
            $cmpt = 0; 
            foreach($data as $keys=>$element){
                if($element !== ''){
                    $cmpt++; 
                }
            }
            
            if($this->verif_email($data) && $this->verif_conf_password($data['password'], $data['Confirm_password']) 
                                                    && $cmpt === count($data)){
                $firstname = esc($data['firstname']); 
                $lastname = esc($data['lastname']); 
                $city = esc($data['city']); 
                $cp = esc($data['CP']); 
                $adresse = esc($data['adresse']); 
                $tel = esc($data['tel']); 
                $country = esc($data['select']); 
                $email = esc($data['email']); 
                $password = esc($data['password']); 
                $confirm_password = esc($data['Confirm_password']); 

                // verfier si le telephone est un nombre 
                //verifie si le mdp est mdp confirm  
                if ($this->verif_conf_password($password, $confirm_password) && is_numeric($tel)){
                    return $this->conn->appendUser([
                    'client_nom'=> $lastname, 
                    'client_prénom'=>$firstname, // changer le nom du champs 
                    'client_cp' =>$cp, 
                    'client_ville' =>$city, 
                    'client_tel' =>$tel, 
                    'client_email'=>$email, // terminer l'insert de la bdd
                    ]);  
                }
            } 
        }return false; 
    } 

    public function verificate_mdp_oublier(array $data)
    {
        if ($this->verif_email($data)){
            return $this->conn->is_account('client_email', $data['email']); 
        }return false; 
    }

    public function verif_email(array $data)
    {
        if(strpos($data['email'], "@")){
            return true; 
        }return false; 
    }

    public function verif_conf_password(string $password, string $confPasswd)
    {
        if ($password === $confPasswd){
            return true; 
        }return false; 
    }
    
}