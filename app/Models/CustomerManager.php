<?php 
namespace App\Models; 
use App\Libraries\HuntError; 

/**
* @file CustomerManager.php
* @author Ayoub Brahim
* @date 20/02/2022
* @brief Manager pour les clients connectés
* @details 
* <p>Cette classe gére toute la logique pour exécuter une requête liée aux clients</p>
**/
class CustomerManager{
    protected $respQuery; 
    protected $errorHunt; 

    /**  
    * @brief Méthode constructrice 
    * @details 
    * <p>Cette méthode constructrice initialise la classe HuntError à l'attribut errorHunt, la classe UserModel à l'attribut respQuery</p>
    **/
    public function __construct()
    {
        $this->errorHunt = new HuntError; 
        $this->respQuery = new UsersModel; 
    }

    /**
    * @brief Méthode qui exécute la requête SQL et la retourne 
    * @param string $id 
    * @details 
    * <p>La méthode exécute la requête SQL pour récupérer les données de l'utilisateur par son id</p>
    * @return object Contient les données des hôtels 
    **/
    public function getProfileData(string $id): object
    {
        return  $this->respQuery->getCreditials($id)[0]; 
    }

    /**
     * @brief Méthode qui met à jour le profil tout en vérifiant avant 
     * @details 
     * <p>La methode verifie si les donner son envoyer avec la methode post,si c'est le cas elle recuperer le donner 
     *      est chasse les erreur(longuer du mot de passe, l'email) qui sont stocker dans tableaux d'erruer.</p>
     * <p>Si le tableaux d'erreur est vide est que les champs obligatoire son entrez, elle regarde les champs qui sont modifier est on execute une requete SQL
     *       pour met a jour les donner dans la base de donner</p>
     * <p>Le mot de passe est hacher avant d'etre envoyer</p>
     * @param  $post
     * @param $id
     * @param $post
     * @param string $pseudo
     * @param string $pseudo
     * @param array $data_user
     * @return array message d'erreur
     */
    public function is_up_to_date(string $pseudo,$post, $id, array $data_user){
        if ($post->getMethod() == 'post' ){
            $post_data = $post->getPost(); // stocke les donner envoyer par l'utilisateur (donc ceux qui vont etre modifier)
            $error = $this->errorHunt->hunt_edit_profile($post_data); 
            if(count($post_data) === 10 && count($error) === 0){ 
                $must_be_modified = $this->who_changed($post_data, $data_user); // renvoie un tabelaux associatif des champs qui on changer
                if(count($must_be_modified) !== 0){
                    $this->respQuery->updateProfile($must_be_modified, $pseudo, $id); // mise a jour du profile
                }
        
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
                }if(count($must_be_modified) !== 0 || $password_modified){ 
                    return ['msg_succes','Votre changement a bien ete pris en compte'];
                }return ["non_modified", ['ignore']]; 
            }return ['msg_error', $error]; 
        }
    }

    /**
    * @brief Methode qui donne un tableaux des element qui on changer
    * @details 
    * <p>La methode donne les element qui ont changer</p> 
    * <p>Elle verifie les donner envoyer par l'utilisateur par ce qui sont dans la base de donner,si les donner ne correspande pas, 
    *    elle ajoute le champs de la base de donner avec la valeur qui a changer dans un tableau</p>
    * <p>Le mot de passe est hacher avant d'etre envoyer</p>
    * @param  array $post_data
    * @param array $data_user
    * @return array elements qui on changer
    */
    protected function who_changed(array $post_data, array $data_user):array{
        //  tableau associatif des element qui on changer,clef: nom du champs, valuer: la valeur
        $must_be_modified = []; 
        foreach($post_data as $keys=>$values){                    
            if($keys !== 'new_password' && $keys !== 'new_password_confirm'){
                if($post_data[$keys] !== $data_user[$keys]){//  fait un filtre pour les voir la difference 
                    if($keys === "pseudo"){
                        // ajoute le compt pseudo 
                        $must_be_modified['compt_pseudo'] = esc($values); 
                    }else{
                        // prend la modification est ajoute au tablea associatif des modifier
                        $must_be_modified["client_".$keys] = esc($values); 
                    }
                }
            }
        }
        return $must_be_modified; 
    }

    /**
    * @brief Methode qui donne un supprime un utlisateur
    * @details 
    * <p>La methode execute une requete SQL pour supprimer toute les donner lies au clients est ca session</p>
    * @param  string $pseudo
    * @param $session
    */
    public function delete_user_data(string $pseudo, $session){
        $this->respQuery->deleteUser($pseudo); 
        $session->remove(['pseudo', 'id']); 
    }

    /**
     * @brief Methode qui va retourner le nom de l'image
     * @details
     * <p>Le methode va regarder si l'utilisateur (par son id) a une photo de profile, si il en a pas il va retourner une image par default
     *  tout en regardant ça civiliter.Si il a une photo de profile stocker dans la base de donner il a renvoie</p>
     * @param string $civ
     * @param  $img_profile
     * @param string $pseudo
     * @return array|string nom de l'image 
     */
    public function managerImgProfile(string $civ, $img_profile, string $id){
        if(empty($img_profile)){
            if($civ === 'Mr'){
                return "mr.webp";
            }return "mme.webp"; 
        }
        return $this->respQuery->getImgByIdCustomers($id); 
    }
}