<?php 
namespace App\Models; 

class UserManager{
    protected $errorHunt;
    private $respQuery; 

    public function __construct(){
        $this->errorHunt = new ConnexionManager; 
        $this->respQuery = new UsersModel; 
    }

    public function verificate_login($method, $session) 
    {
        if ($method !== 'post'){
            return []; 
        }
        $pseudo = $_POST['username']; 
        $password = $_POST['password']; 
        if ($pseudo !== '' || $password !== ''){
            $resp = $this->respQuery->login(esc($pseudo), esc($password));
            if (is_array($resp) && count($resp) === 1){ // si la requete est bonne on a joute le pseudo est son id dans la session
                $session->set([
                    'pseudo'=>$resp[0]->name,
                    'id'=>$resp[0]->id
                ]);
                return[];
            }return ['Mot de passe ou/et indentifiant incorrect']; 
        }return $this->errorHunt->hunt_error_login($password, $pseudo); //renvoie le message d'erreur
    }

    public function verificate_mdp_oublier($method): array 
    {
        if ($method === 'post'){
            $email = $_POST['email']; 
            $resp_query = $this->respQuery->is_a_account_by_email($email); 
            return  $this->errorHunt->forget_password($email, $resp_query);
        }return []; 
    }

    public function verificate_create_account($method): array 
    {
        if ($method === 'post'){
            $error = $this->errorHunt->hunt_error_create_account($_POST);
            if(count($error) === 0){
                // verifie si la longeur des element du post sont a 11
                $not_empty = 0; 
                if (count($_POST) === 11){
                    //parcour le contenue du post est regarde si c'est pas vide
                    foreach($_POST as $_=>$element){
                        if(! empty($element)){
                            $not_empty++; 
                        }
                    }
                    // si les nombres des champs remplie
                    if ($not_empty === count($_POST)){
                        $is_register_pseudo = $this->respQuery->is_a_account_by_pseudo($_POST['pseudo']); 
                        $is_register_email = $this->respQuery->is_a_account_by_email($_POST['email']);
                        if(empty($is_register_pseudo)){
                            if(empty($is_register_email)){
                                $this->respQuery->appendUser([
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
                                    // trouver un moyen de rediriger une fois qu'il c'est inscrit
                                    // return redirect()->to('http://localhost/ardis/public/customers/');
                                    // FIXME incrementer la le champs de client_id dans 
                            }
                            else{
                                $error[] = 'Cette email est deja prise';
                            }
                        }
                        else{
                            $error[] =  'Veuillez choisir un autre pseudo'; 
                        }
                    }
                }     
            }return $error;
        }return []; 
        
    } 

}