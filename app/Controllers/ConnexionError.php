<?php 
namespace App\Controllers; 

// class pour les message d'erruer pour tout ce qui est connexion 
class ConnexionError {
    private array $error; 

    public function __construct()
    {
        $this->error = []; 
    }

    public function hunt_error_login(array $post, $resp)
    {
        if(!$resp){
            if($this->verif_lenght_password($post['password'], 8)){
                return 'Votre mot de passe est trop petit';
            }
            return 'Votre mot de passe/idenitifiant incorrecte! '; 
        }

        $pseudo = isset($post['pseudo']);
        $password = isset($post['password']);
        if(empty($password) || empty($pseudo)){
            array_push($this->error,'Veuillez entrez votre mot de passe et identifiant'); 
        }
        return $this->error; 
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

    public function hunt_error_create_account(array $post): array 
    {
        $tel = $post['tel']; 
        $password = $post['password']; 
        $confirm_password = $post['Confirm_password']; 

        if(! $this->verif_conf_password($password, $confirm_password)){
            array_push($this->error,'Veuillez entrez le meme mot de passe!'); 
        }if(! is_numeric($tel)){
            array_push($this->error,'Veuillez entrez un numero de telephone valide!'); 
        }if(! $this->verif_lenght_password($password)){
            array_push($this->error,'Veuillez entrez un mot de passe de plus de huit carachtere!'); 
        }
        return $this->error; 
    }

    private function verif_conf_password(string $password, string $confPasswd)
    {
        if ($password === $confPasswd){
            return true; 
        }return false; 
    }

    private function verif_lenght_password(string $password, int $min_length=8)
    {
        if(strlen($password) >= $min_length){
            return true; 
        }return false; 
    }


}