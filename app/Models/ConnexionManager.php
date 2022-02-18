<?php 
namespace App\Models; 

// class pour les message d'erruer pour tout ce qui est connexion 
class ConnexionManager {
    private $error = []; 

    public function hunt_error_login(string $password, string $pseudo): array 
    {
        // reecrire le code est voir tout les option 
        if($this->length_password($password, 8)){
            $this->error[] = 'Votre mot de passe est trop petit';
        }
        if(empty($password) || empty($pseudo)){
            $this->error[] = 'Veuillez entrez votre mot de passe et/ou identifiant'; 
        }
        return $this->error; 
    }

    public function forget_password($email, $resp): array 
    {
        if($this->verif_email($email)){
            if(count($resp) === 1){
                return ['success'=>'Un email va vous etre envoyer'];
            }
        } return ["danger"=>'Verifier votre email!'];
    }

    public function hunt_error_create_account(array $post): array 
    {
        $tel = $post['tel']; 
        $email = $post['email']; 
        $password = $post['password']; 
        $confirm_password = $post['Confirm_password']; 

        if(! $this->verif_conf_password($password, $confirm_password)){
            $this->error[] ='Veuillez entrez le meme mot de passe!';
        }if(! is_numeric($tel)){
            $this->error[] ='Veuillez entrez un numero de telephone valide!';
        }if(! $this->length_password($password)){
            $this->error[] = 'Veuillez entrez un mot de passe de plus de huit carachtere!'; 
        }if(! $this->verif_email($email)){
            $this->error[] = 'Veuillez entrez un email valide'; 
        }if(count($post) < 11){
            $this->error[] = "Veuilleez remplire les tout les champs! "; 
        }
        return $this->error; 
    }

    private function verif_conf_password(string $password, string $confPasswd): bool 
    {
        return $password === $confPasswd; 
    }

    private function length_password(string $password, int $min_length=8): bool 
    {
        return strlen($password) > $min_length;
    }

    private function verif_email($email): bool
    {
        return is_string($email) && strpos($email, '@'); 
    }

}