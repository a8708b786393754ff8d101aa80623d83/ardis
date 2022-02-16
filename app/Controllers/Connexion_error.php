<?php 
namespace App\Controllers; 

class Connexion_error {
    // class pour les message d'erruer pour tout ce qui est connexion 
    private array $error; 

    public function hunt_error_login(array $post, $resp)
    {
        if(!$resp){
            if(strlen($post['password']) < 8 ){
                return 'Votre mot de passe est trop petit';
            }
            return 'Votre mot de passe/idenitifiant incorrecte! '; 
        }

        $pseudo = isset($post['pseudo']);
        $password = isset($post['password']);
        if(empty($password) || empty($pseudo)){
            $this->error[] = 'Veuillez entrez votre mot de passe et identifiant'; 
        }
        return $this->error; 
    }

    public function hunt_error_create_account(array $post)
    {

    }

    public function forget_password(bool $resp) 
    {
        if(! $resp){
        return [
            "danger"=>'Verifier votre email!'
            ];
        }
        return [
            'success'=>'Un email va vous etre envoyer',
        ];
    }


}