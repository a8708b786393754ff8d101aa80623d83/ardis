<?php 
namespace App\Models; 

class UserManager extends UsersModel{
    protected $errorHunt; 
    public function __construct(){
        parent::__construct();
        $this->errorHunt = new ConnexionManager; 
    }

    public function verificate_login($requests)
    {
        var_dump($this->session); 
        if ($requests === 'post'){
            $pseudo = $_POST['username']; 
            $password = $_POST['password']; 
            if ($pseudo !== '' || $password !== ''){
                $resp = $this->login(esc($pseudo), esc($password));
                if (is_array($resp) && count($resp) === 1){ // si la requete est bonne
                    $this->session->set([
                        'pseudo'=>$resp[0]->name,
                        'id'=>$resp[0]->id
                    ]); return []; 
                }
            }return $this->errorHunt->hunt_error_login($password, $pseudo); //renvoie le message d'erreur
        }return []; 
    }

    public function verificate_create_account(array $data): bool
    {
        // verifie si la longeur des element du post sont a 11
        if (count($data) === 11){
            $cmpt = 0; 
            foreach($data as $keys=>$element){
                if($element !== ''){
                    $cmpt++; 
                }
            }if ($cmpt === count($data)){ // si les nombres des champs remplie
                $this->conn->appendUser([
                'client_nom'    => esc($data['lastname']), 
                'client_prenom' => esc($data['firstname']), 
                'client_cp'     => esc($data['CP']), 
                'client_ville'  => esc($data['city']), 
                'client_tel'    => esc($data['tel']) , 
                'client_email'  => esc($data['email']), 
                'client_pays'   => esc($data['select']), 
                'client_adresse'=> esc($data['adresse'])
                ],
                [
                    'compt_pseudo' => esc($data['pseudo']),
                    'compt_pass'   => esc($data['password'])
                ]); return true; 
            }
        }return false; 
    } 

    public function verificate_mdp_oublier(array $data): bool
    {
        $resp_query = $this->conn->getEmail($data['email']); 
        if(count($resp_query) === 1){
            return true; 
        }return false; 
    }
}