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
        $resp = $this->conn->login($pseudo, $passwd);

        //verifie sic'est une tbaleau est que  
        if (is_array($resp) && isset($resp[0]->name)){ 
            $this->session->set([
                    'pseudo'=>$resp[0]->name
                    ]); 
            return true; 
        }else{

        }
        return false; 
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