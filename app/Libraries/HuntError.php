<?php 
namespace App\Libraries; 
/**
* @file HuntError.php
* @author Ayoub Brahim <ayoubbrahim68@gmail.com>
* @date 15/02/2022
* @brief Classe pour la gestion d'erreur
* @details 
* <p>Cette classe contient la logique des tests est la gestion d'erreur</p>
**/

class HuntError {
    public $error = []; 

    /**
    * @brief Methode qui chasse les erruer lie a la connexion d'un compte   
    * @details 
    * <p>Les erruer seront stockée au fur est mesure que les test ne passe pas </p>
    * <p>La methode verifie:</p>
    *<ul>
    * 	<li>le contenue du pseudo est du mot de passe entrez (s'il ne sont pas vide).</li>
    * 	<li>verifie l'hash stocker en bdd est le mot de passe entrez.</li>
    * 	<li>verifie la longuer du mot de passe (il est de huit par default)</li>
    *</ul>
    * @param string $pseudo
    * @param string $password
    * @param string $password_bdd
    * @return array Contient les erruer  
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
    * @brief Methode qui chasse les erruer lie a l'oublie de mot de passe
    * @details 
    * <p>Les erruer seront stockée au fur est mesure que les test ne passe pas </p>
    * <p>La methode verifie:</p>
    *<ul>
    * 	<li>verifie l'email garce a la methode de cette instante</li>
    * 	<li>verifie si la reponse de la requete sql a retourner des elements </li>
    *</ul>
    * @param string $email 
    * @param array $resp
    * @return array Contient le type de d'erruer est de son contenue  
    **/
    public function forget_password(string $email, array $resp): array{
        if($this->verif_email($email)){
            if(count($resp) === 1){
                return ['success'=>'Un email va vous etre envoyer'];
            } // la clef est le type d'erruer, la valeur le contenue du message
        } return ["danger"=>'Verifier votre email!'];
    }

    /**
    * @brief Methode qui chasse les erruer lie a l'oublie de mot de passe
    * @details 
    * <p>Les erruer seront stockée au fur est mesure que les test ne passe pas </p>
    * <p>La methode verifie:</p>
    *<ul>
    * 	<li>verifie l'email garce a la methode de cette instante</li>
    * 	<li>verifie si la reponse de la requete sql a retourner des elements </li>
    *</ul>
    * @param string $email 
    * @param array $resp
    * @return array Contient le type de d'erruer est de son contenue  
    **/
    public function hunt_error_create_account(array $post_data): array{
        $tel = $post_data['tel']; 
        $email = $post_data['email']; 
        $password = $post_data['password']; 
        $confirm_password = $post_data['Confirm_password']; 
        if(! $this->isAllEmpty($post_data, 12)){
            $this->error[] = "Veuillez remplire les tout les champs! "; 
        }

        $this->verif_conf_password($password, $confirm_password); 
        $this->length_password($password);
        $this->verif_email($email);
        $this->verif_tel($tel);
        return $this->error; 
    }

    /**
    * @brief Methode qui verifie la confirmation de mot de passe  
    * @details
    *<p>Elle regarde si le mot de passe est le meme que la confirmation, si c'est pas le meme il ajoute l'erruer au tableaux d'erreur</p>
    * @param string $password 
    * @param string $conf_password 
    */
    public function verif_conf_password(string $password, string $conf_password){
        if($password !== $conf_password){
            $this->error[] ='Veuillez entrez le meme mot de passe!';
        }
    }

    /**
    * @brief Methode qui verifie la longeur du mot de passe 
    * @details
    *<p>Elle regarde si la longeur du mot de passe est de 8 ou plus, si c'est pas le cas il rajoute au tableaux d'erreur </p>
    * @param int $min_length = 8
    * @param string $password 
    */
    public function length_password(string $password, int $min_length=8){
        if(strlen($password) < $min_length){
            $this->error[] = 'Veuillez entrez un mot de passe de plus de huit carachtere!'; 
        }
    }

     /**
    * @brief Methode qui verifie l'email 
    * @details
    *<p>Elle regarde si l'email est dans le bon format , si c'est pas le cas il rajoute au tableaux d'erreur </p>
    * @param string $email
    * @return true|null 
    */
    public function verif_email($email){
        if(! filter_var($email, FILTER_VALIDATE_EMAIL)){
            $this->error[] = 'Veuillez entrez un email valide'; 
            return null; 
        }return true;

    }

    /**
    * @brief Methode qui verifie le format du numéros de téléphone 
    * @details
    *<p>Elle regarde si le numéros de téléphone  est dans le bon format , si c'est pas le cas il rajoute au tableaux d'erreur </p>
    *<p>Cette methode sera plus utiliser dans l'edition de profile, l'inscription</p>
    * @param string $tel 
    */
    public function verif_tel(string $tel){
        if(! is_numeric($tel)){
            $this->error[] ='Veuillez entrez un numéros de téléphone valide!';
        }
    }

     /**
    * @brief Methode qui verifie le format du numéros de téléphone 
    * @details
    *<p>Elle regarde si le numéros de téléphone  est dans le bon format , si c'est pas le cas il rajoute au tableaux d'erreur </p>
    *<p>Cette methode sera plus utiliser dans l'edition de profile, l'inscription</p>
    * @param string $tel 
    */
    public function isAllEmpty(array $arrData, int $mandatory): bool{
        $not_empty = 0; 
        foreach($arrData as $_ =>$values){
            if(! empty($values)){
                $not_empty++; 
            }
        }
        return $not_empty >= $mandatory; 
    }

     /**
    * @brief Methode qui chasse les erruer lié a l'editiion de profile
    * @details
    *<p>Elle regarde si les entrez sont dans le bon format , si c'est pas le cas il rajoute au tableaux d'erreur </p>
    * @param array $data_post 
    */
    public function hunt_edit_profile(array $data_post):array {
        $password = $data_post['new_password']; 
        $password_confirm = $data_post['new_password_confirm']; 
        $num_tel = $data_post['tel']; 
        $email = $data_post['email'];
        
        if($this->isAllEmpty($data_post, 8)){   //  le 8, c'est le nombre de champs obligatoire 
            $this->verif_conf_password($password, $password_confirm); 
            $this->verif_tel($num_tel); 
            $this->verif_email($email); 
            if(! empty($password) && ! empty($password_confirm)){ // pour verifier si les mot de passe est le confirm passwd sont entrez
                $this->length_password($password);
            }
        }else{
            $this->error[] = 'Veuillez entrez tout les champs'; 
        }
        return $this->error; 
    }

    
    /**
    * @brief Methode qui trouve les erruer liée au televersement d'image de profile
    *  @details 
    *	<p>Cette fonction cherche les erruer lier au televersement d'image de profile</p>
    *  <ul>
    * 	    <li><strong>la taille</strong></li>
    * 	    <li><strong>l'exension</strong></li>
    * 	    <li><strong>regarde si il le fichier est valide</strong></li>
    * </ul>
    * @param  $img
    * @param int $max_length
    * @return array contenant les erruer 
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

    /**
    * @brief Methode qui trouve les erruer liée a la reservation
    * @details 
    * <p>Cette methode utilise la methode isAllEmpty pour voir si les champs d'entrez son bien remplie, le décalage des date de debut est de fin.</p>
    * @param  array $post
    * @return array contenant les erruer 
    */
    public function huntReservation(array $post):array{
        if(! $this->isAllEmpty($post, 5)){
            $this->error[] = 'Veuillez entrez tout les champ'; 
        }if(strtotime($post['enddate']) < strtotime($post['startdate']) || strtotime($post['startdate']) < strtotime(date('Y-m-d')) ){
            $this->error[] = 'Veuillez verifier vos date';
        }if(! is_numeric($post['nbr_lit'])){
            $this->error[] = 'Veuillez entrez une nombre'; 
        }if($post['activiter'] === 'yes'){
            $this->error[] = 'Veuillez entrez choisir une activiter'; 
        }
        return $this->error; 
    }
}