<?php 
namespace App\Models; 

class UserManager{
    protected HuntError $errorHunt;
    private  UsersModel $respQuery; 

    public function __construct(){
        $this->errorHunt = new HuntError; 
        $this->respQuery = new UsersModel; 
    }

    public function verificate_login($method, $session, $redirect){
        if ($method !== 'post'){
            return []; 
        }
        $pseudo = esc($_POST['username']); 
        $password = esc($_POST['password']); 
        if ($pseudo !== '' || $password !== ''){
            $passwd_hash_bdd = $this->respQuery->getPasswordByPseudo($pseudo);
            if(! empty($passwd_hash_bdd)){
                $resp = $this->respQuery->login($pseudo, $passwd_hash_bdd); 
                if (is_array($resp) && count($resp) === 1 ){ // si la requete est bonne on a joute le pseudo est son id dans la session
                    var_dump($password);
                    if(password_verify($password, $resp[0]->passwd_hash)){
                        $session->set([
                            'pseudo'=>$resp[0]->name,
                            'id'=>$resp[0]->id
                        ]);
                        return true; 
                    }
                }return ['Mot de passe ou/et indentifiant incorrect']; 
            }
            return $this->errorHunt->hunt_error_login($pseudo, $password, $passwd_hash_bdd); //renvoie le message d'erreur
        }
    }

    public function verificate_mdp_oublier($method){
        if ($method === 'post'){
            $email = $_POST['email']; 
            $resp_query = $this->respQuery->is_a_account_by_email($email); 
            return  $this->errorHunt->forget_password($email, $resp_query);
        }return []; 
    }

    public function verificate_create_account($method){
        if ($method === 'post'){
            $error = $this->errorHunt->hunt_error_create_account($_POST);
            if(count($error) === 0){
                // ? verifie si la longeur des element du post sont a 12
                if (count($_POST) === 12){
                    // ? parcour le contenue du post est regarde si c'est pas vide
                    $not_empty = 0; 
                    foreach($_POST as $_=>$element){
                        if(! empty($element)){
                            $not_empty++; 
                        }
                    }
                    // ? si tout les champs sont renseigner
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
                                        'client_adresse'=> esc($_POST['adresse']),
                                        'client_civ'=> esc($_POST['civ'])
                                    ],
                                    [
                                        'compt_pseudo' => esc($_POST['pseudo']),
                                        'compt_pass'   => password_hash(esc($_POST['password']), PASSWORD_DEFAULT)
                                    ]); 
                                return ['msg_succes', 'Votre compe a été creer'];  
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
            }return ['msg_error',$error];
        }return "none";
    }

    public function verifSendMail(array $data){
        if($this->errorHunt->isAllEmpty($data,3) && $this->errorHunt->verif_email($data['mailTo'])){ // verifie si les champs sans ne sont pas vide, return true si tout est remplie
            return true; 
        }return false; 

    }

    public function verifReservation(array $data){
        $error = []; 
        if($this->errorHunt->isAllEmpty($data, 5)){
            if(strtotime($data['startdate']) > strtotime($data['enddate'])){
                $error[] = 'Veuillez verifier votre date'; 
            }
        }else{
            $error[] = 'Veuillez rentrez tout les champs'; 
        }

        if(empty($error)){
            return ['msg_succes','Votre reservation est faite, veuillez verifier votre adrresse email'];  
        }return ['msg_error', $error]; 
    }
}