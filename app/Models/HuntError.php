<?php 
namespace App\Models; 
/**
* @file HuntError.php
* @author Ayoub Brahim <ayoubbrahim68@gmail.com>
* @date 15/02/2022
* @brief Classe pour la gestion d'erreur
* @details 
* <p>Cette classe contient la logique des tests et la gestion d'erreur</p>
**/

class HuntError {
    public $error = []; 

    /**
    * @brief Méthode qui chasse les erreurs liées à la connexion d'un compte   
    * @details 
    * <p>Les erreurs seront stockées au fur et à mesure que les tests ne passent pas </p>
    * <p>La méthode vérifie:</p>
    *<ul>
    * 	<li>le contenu du pseudo et du mot de passe saisis (s'ils ne sont pas vides).</li>
    * 	<li>le mot de passe haché stocké en bdd avec celui saisi.</li>
    * 	<li>la longueur du mot de passe (il est de huit caractères par défaut)</li>
    *</ul>
    * @param string $pseudo
    * @param string $password
    * @param string $password_bdd
    * @return array Contient les erreurs  
    **/
    public function hunt_error_login(string $pseudo, string $password, string $passwd_bdd): array {
        if(empty($password) || empty($pseudo)){
            $this->error[] = 'Veuillez entrez votre mot de passe et/ou identifiant'; 
        }
        if(! password_verify($password, $passwd_bdd)){
            $this->error[] = 'Votre mot de passe ou identifiant incorrecte'; 
        }
        $this->length_password($password);
        return $this->error; 
    }

    /**
    * @brief Méthode qui chasse les erreurs liées à l'oubli du mot de passe
    * @details 
    * <p>Les erreurs seront stockées au fur et à mesure que les tests ne passent pas </p>
    * <p>La méthode vérifie:</p>
    *<ul>
    * 	<li> l'email grâce à la méthode de cette instance</li>
    * 	<li> si la réponse de la requête SQL à retourner des éléments </li>
    *</ul>
    * @param string $email 
    * @param array $resp
    * @return array Contient le type d'erreur et de son contenu  
    **/
    public function forget_password(string $email, array $resp): array{
        if($this->verif_email($email)){
            if(count($resp) === 1){
                return ['success'=>'Un email va vous être envoyer'];
            } // la clef est le type d'erruer, la valeur le contenue du message
        } return ["danger"=>'Verifier votre email!'];
    }

    /**
    * @brief Méthode qui chasse les erreurs liées à l'oubli de mot de passe
    * @details 
    * <p>Les erreurs seront stockées au fur et à mesure que les tests ne passent pas </p>
    * <p>La méthode vérifie:</p>
    *<ul>
    * 	<li> l'email grâce à la méthode de cette instance</li>
    * 	<li> si la réponse de la requête SQL à retourner des éléments </li>
    *</ul>
    * @param string $email 
    * @param array $resp
    * @return array Contient le type d'erreur et son contenu  
    **/
    public function hunt_error_create_account(array $post): array{
        $tel = $post['tel']; 
        $email = $post['email']; 
        $password = $post['password']; 
        $confirm_password = $post['Confirm_password']; 
        if(! $this->isAllEmpty($post, 12)){
            $this->error[] = "Veuillez remplire les tout les champs! "; 
        }

        $this->verif_conf_password($password, $confirm_password); 
        $this->length_password($password);
        $this->verif_email($email);
        $this->verif_tel($tel);
        return $this->error; 
    }

    public function verif_conf_password(string $password, string $confPasswd){
        if($password !== $confPasswd){
            $this->error[] ='Veuillez entrez le meme mot de passe!';
        }
    }

    public function length_password(string $password, int $min_length=8){
        if(strlen($password) < $min_length){
            $this->error[] = 'Veuillez entrez un mot de passe de plus de huit carachtere!'; 
        }
    }

    public function verif_email($email){
        if(! is_string($email) || strpos($email, '@') === false){
            $this->error[] = 'Veuillez entrez un email valide'; 
        }return true; 
    }

    public function verif_tel(string $tel){
        if(! is_numeric($tel)){
            $this->error[] ='Veuillez entrez un numero de telephone valide!';
        }
    }
    public function isAllEmpty(array $arrData, int $mandatory): bool{
        $not_empty = 0; 
        foreach($arrData as $_ =>$values){
            if(! empty($values)){
                $not_empty++; 
            }
        }
        return $not_empty >= $mandatory; 
    }

    public function hunt_edit_profile($data_post): array {
        $password = $data_post['new_password']; 
        $password_confirm = $data_post['new_password_confirm']; 
        $num_tel = $data_post['tel']; 
        $email = $data_post['email'];
        
        if($this->isAllEmpty($data_post, 8)){   // ? le 8, c'est le nombre de champs obligatoire 
            $this->verif_conf_password($password, $password_confirm); 
            $this->verif_tel($num_tel); 
            $this->verif_email($email); 
            if(! empty($password) && ! empty($password_confirm)){ // ?pour verifier si les mot de passe est le confirm passwd sont entrez
                $this->length_password($password);
            }
        }else{
            $this->error[] = 'Veuillez entrez tout les champs'; 
        }
        return $this->error; 
    }

    
    /**
    * @brief Méthode qui trouve les erreurs liées au téléversement d'image de profil
    *  @details 
    *	<p>Cette fonction cherche les erreurs liées au téléversement d'image de profil</p>
    *  <ul>
    * 	    <li><strong>la taille</strong></li>
    * 	    <li><strong>l'extension</strong></li>
    * 	    <li><strong>regarde si le fichier est valide</strong></li>
    * </ul>
    * @param  $img
    * @param int $max_length
    * @return array contenant les erreur 
    */
    public function huntUplaodedFile($img, int $max_length, array $white_list): array {
        // si l'extension n'est pas dans la liste blanche 
        if(! in_array($img->getClientExtension(), $white_list)){ 
            $this->error [] = 'Veuillez choisir une image '; 
        }
        // verifie la taille du fichier
        if( $img->getSize() >= $max_length){ 
            $this->error[] = 'Votre image est trop lourdes'; 
        }   
        
        // pour voir si le fichier est valide est qu'il a pas ete deplacer 
        if(! $img->isValid() && $img->hasMoved()){
            $this->error[] = "Veuillez re-entrez l'image ";
        }
        
        return $this->error; 
    }
}