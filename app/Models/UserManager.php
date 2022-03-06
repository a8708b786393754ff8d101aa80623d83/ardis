<?php 
namespace App\Models; 
/**
* @file UserManager.php
* @author Ayoub Brahim
* @date 10/02/2022
* @brief Manager pour les utilisateur
*  @details 
* <p>Cette classe gére toute la logique pour executer la bonne requete</p>
**/

class UserManager{
    protected HuntError $errorHunt;
    private  UsersModel $userModel; 

    /**
    * @brief Méthode constructrice 
    * @details 
    * <p>La méthode constructrice initialise la classe UsersModel est la classe HuntError </p>
    **/
    public function __construct(){
        $this->errorHunt = new HuntError; 
        $this->userModel = new UsersModel; 
    }

    /**
    * @brief Methode qui verifie les donner entrez par l'utilsateur pour se connecter     
    * @details 
    * <p>La methode verifie la methode d'envoye, si c'est un POST il recupere le pseudo est le mot de passe en filtrant le contenue.</p>
    * <p>Si les entrez sont correct, on ajoute le pseudo, nom, prenom est l'id du client</p>
    * <p>Elle renvoie true si tout ce passe bien, sinon un tableaux avec les erruer </p>
    * @param  string $method
    * @param  $session
    * @return array Contient les donner de l'hotel
    **/
    public function verificate_login(string $method, $session){
        if ($method !== 'post'){
            return []; 
        }
        $pseudo = esc($_POST['username']); 
        $password = esc($_POST['password']); 
        if ($pseudo !== '' || $password !== ''){
            $passwd_hash_bdd = $this->userModel->getPasswordByPseudo($pseudo);
            if(! empty($passwd_hash_bdd)){
                $resp = $this->userModel->login($pseudo, $passwd_hash_bdd); 
                if (is_array($resp) && count($resp) === 1 ){ // si la requete est bonne on a joute le pseudo est son id dans la session
                    if(password_verify($password, $resp[0]->passwd_hash)){
                        $session->set([
                            'pseudo'=>$resp[0]->name,
                            'nom'=>$resp[0]->nom, 
                            'prenom'=>$resp[0]->prenom, 
                            'id'=>$resp[0]->id
                        ]);
                        return true; 
                    }
                } 
            }return $this->errorHunt->hunt_error_login($pseudo, $password, $passwd_hash_bdd); //renvoie le message d'erreur
        }
    }

    /**
    * @brief Methode qui verifie l'email du mot de passe oublier    
    * @details 
    * <p>La methode verifie la methode d'envoye, si c'est un POST il recupere l'email en filtrant le contenue.</p>
    * <p>Si l'entrez est correcte, on lui dit envoye un message </p>
    * <p>Elle renvoie un tableaux d'erruer si il y en a, sinon un tableaux vide</p>
    * @param  string $method
    * @return array Contient les erruer/rien 
    **/
    public function verificate_mdp_oublier(string $method): array{
        if ($method === 'post'){
            $email = $_POST['email']; 
            $resp_query = $this->userModel->is_a_account_by_email($email); 
            return  $this->errorHunt->forget_password($email, $resp_query);
        }return []; 
    }

    /**
    * @brief Methode qui verifie l'inscription d'un nouvelle utilisateur    
    * @details 
    * <p>La methode verifie les entrez de l'utilisateur respecte les regles de securiter du mot de passe, 
    *        regarde si le pseudo est l'email n'a pas deja été renseigner par un autre utilisateur.</p>
    * <p>Si tout est bon, le tableaux associatif se remplie, les clefs: les nom des champs, les valeurs: les valeur entrez par l'utilisateur</p>
    * <p>Elle renvoie un tableaux d'erruer/de succes a l'indice 0 est le conteune du message a l'indice 1</p>
    * @param  string $method
    * @return array Contient les erruer/succes 
    **/
    public function verificate_create_account(string $method){
        if ($method === 'post'){
            $error = $this->errorHunt->hunt_error_create_account($_POST);
            if(count($error) === 0){
                if ($this->errorHunt->isAllEmpty($_POST, 12)){ // envoie tru si les 12 champs sont reseignier
                    $is_register_pseudo = $this->userModel->is_a_account_by_pseudo($_POST['pseudo']); 
                    $is_register_email = $this->userModel->is_a_account_by_email($_POST['email']);
                    if(empty($is_register_pseudo)){
                        if(empty($is_register_email)){
                            $this->userModel->appendUser([
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
            }return ['msg_error',$error];
        }return "none";// est renvoyer si c'est pas un methode en POST
    }


    /**
    * @brief Methode qui regarde si l'email doit etre envoyer
    * @details 
    * <p>La methode verifie si les champs ne sont pas vide est que l'email est bien dans le bon format.</p>
    * @param  array $data
    * @return bool  Contient les erruer/succes 
    **/
    public function isMatchForSendMail(array $data): bool{
        // verifie si les champs sans ne sont pas vide, return true si tout est remplie
        if($this->errorHunt->isAllEmpty($data,3) && $this->errorHunt->verif_email($data['mailTo'])){ 
            return true; 
        }return false; 
    }
}