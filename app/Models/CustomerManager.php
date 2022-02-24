<?php 
/**
 * @file articles_controller.php
* @author Ayoub Brahim
*  @details 
* @brief Manager pour les client connecter
* <p>Cette class gere toute la logique pour executer une requete</p>
* <p>Les actions sont :</p>
* <ul>
* 	<li><strong>home</strong> : page d'accueil</li>
* 	<li><strong>blog</strong> : Liste des articles</li>
* </ul>
*
**/
namespace App\Models; 
class CustomerManager{
    protected $respQuery; 
    protected $errorHunt; 

    /**
    *	@brief methode constructeur qui initialise 
    *	<p>Cette fonction permet de rechercher via une requête, 
    *		la liste des articles présents dans la base de données</p>
    **/

    public function __construct()
    {
        $this->errorHunt = new HuntError; 
        $this->respQuery = new UsersModel; 
    }

    public function getProfileData(string $id): object
    {
        return  $this->respQuery->getCreditials($id)[0]; 
    }

    /**
     * Methode qui met a jour le profile tout en verifiant avant 
     * Retourne un tableau de message 
     * ! index 1: le type de message(erreur ou success), index2: le message 
     * @param string $pseudo
     * @param  $post
     * @param array $data_user
     */
    public function is_up_to_date(string $pseudo,$post, $id, array $data_user){
        if ($post->getMethod() == 'post' ){
            $post_data = $post->getPost(); // * stocke les donner envoyer par l'utilisateur (donc ceux qui vont etre modifier)
            $error = $this->errorHunt->hunt_edit_profile($post_data); // * chasse les erruer 
            if(count($post_data) === 10 && count($error) === 0){ // * regarde si les donner envoyer son egale a 11 
                // * fonction qui dit qui a changer
                $must_be_modified = $this->who_changed($post_data, $data_user);
                if(count($must_be_modified) !== 0){
                    // * modification du profile 
                    $this->respQuery->updateProfile($must_be_modified, $pseudo, $id); 
                }
                // * partit pour les mot de passe 
                $password_entry = esc($post_data['new_password']);
                $password_entry_confirm = esc($post_data['new_password_confirm']);
                $password_modified = false; 
                if(! empty($password_entry) && ! empty($password_entry_confirm)){
                    if($password_entry === $password_entry_confirm){
                        $passwd_bdd = $this->respQuery->getPasswordByPseudo($pseudo);
                        $password_hash = password_hash(esc($post_data['new_password']), PASSWORD_DEFAULT);
                        $this->respQuery->updatePassword($pseudo, $password_hash); 
                        $password_modified = true; 
                    }
                }if(count($must_be_modified) !== 0 || $password_modified){ // ! regarde si le tableaux des changement n'est pas vide
                    return ['msg_succes','Votre changement a bien ete pris en compte'];
                }return ["non_modified", ['ignore']]; 
            }return ['msg_error', $error]; 
        }
    }

    /**
     * Methode proteger qui 
     * 
     * 
     * 
     */

    protected function who_changed(array $post_data, array $data_user):array{
        // * tableau associatif des element qui on changer,clef: nom du champs, valuer: la valeur (bah oe ta crus quoi)
        $must_be_modified = []; 
        foreach($post_data as $keys=>$values){                    
            if($keys !== 'new_password' && $keys !== 'new_password_confirm'){
                if($post_data[$keys] !== $data_user[$keys]){// ? fait un filtre pour les voir la difference 
                    if($keys === "pseudo"){
                        // ? ajoute le compt pseudo 
                        $must_be_modified['compt_pseudo'] = esc($values); 
                    }else{
                        //? prend la modification est ajoute au tablea associatif des modifier
                        $must_be_modified["client_".$keys] = esc($values); 
                    }
                }
            }
        }
        return $must_be_modified; 
    }
    // ? supprimer un utlisateur par le pseudo
    public function delete_user_data(string $pseudo, $session){
        $this->respQuery->deleteUser($pseudo); 
        $session->remove(['pseudo', 'id']); 
    }

    /**
     * methode qui va retourner le nom de l'image
     * @param string $civ
     * @param string $img_profile
     * @param string $pseudo
     */
    public function managerImgProfile(string $civ, string $img_profile, string $id){
        if(empty($img_profile)){
            if($civ === 'Mr'){
                return "mr.png";
            }return "mme.png"; // ! changer en webp 
        }
        return $this->respQuery->getImgByIdCustomers($id); 
    }
}