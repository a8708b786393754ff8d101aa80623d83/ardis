<?php 
namespace App\Models; 

class UserManager extends UsersModel{
    protected $errorHunt;

    public function __construct(){
        parent::__construct();
        $this->errorHunt = new ConnexionManager; 
    }

    public function verificate_login($method, $session): array 
    {
        if ($method === 'post'){
            $pseudo = $_POST['username']; 
            $password = $_POST['password']; 
            if ($pseudo !== '' || $password !== ''){
                $resp = $this->login(esc($pseudo), esc($password));
                if (is_array($resp) && count($resp) === 1){ // si la requete est bonne on a joute le pseudo est son id dans la session
                    $session->set([
                        'pseudo'=>$resp[0]->name,
                        'id'=>$resp[0]->id
                    ]);
                    // ? rediriger l'utilisateur vers index
                    return []; 
                }return ['Mot de passe ou/et indentifiant incorrect']; 
            }return $this->errorHunt->hunt_error_login($password, $pseudo); //renvoie le message d'erreur
        }return []; 
    }

    public function verificate_create_account($method): array 
    {
        // return redirect()->to('http://localhost/ardis/public/customers/');

        if ($method === 'post'){
            $error = $this->errorHunt->hunt_error_create_account($_POST);
            if(count($error) === 0){
                $cmpt = 0; 
                // verifie si la longeur des element du post sont a 11
                if (count($_POST) === 11){
                    foreach($_POST as $keys=>$element){
                        //parcour le contenue du post est regarde si c'est pas vide
                        if(! empty($element)){
                            $cmpt++; 
                        }
                    }
                    // si les nombres des champs remplie
                    if ($cmpt === count($_POST)){
                        $this->appendUser([
                        'client_nom'    => esc($_POST['lastname']), 
                        'client_prenom' => esc($_POST['firstname']), 
                        'client_cp'     => esc($_POST['CP']), 
                        'client_ville'  => esc($_POST['city']), 
                        'client_tel'    => esc($_POST['tel']) , 
                        'client_email'  => esc($_POST['email']), 
                        'client_pays'   => esc($_POST['select']), 
                        'client_adresse'=> esc($_POST['adresse'])
                        ],
                        [
                            'compt_pseudo' => esc($_POST['pseudo']),
                            'compt_pass'   => esc($_POST['password'])
                        ]); 
                    }
                }     
            }return $error;
        }return []; 
        
    } 

    public function verificate_mdp_oublier($method): array 
    {
        if ($method === 'post'){
            $email = $_POST['email']; 
            $resp_query = $this->getEmail($email); 
            return  $this->errorHunt->forget_password($email, $resp_query);
        }return []; 
    }
}