<?php 
namespace App\Models; 

// class manager pour les clients
class CustomerManager{
    protected $respQuery; 

    public function __construct()
    {
        $this->errorHunt = new ConnexionManager; 
        $this->respQuery = new UsersModel; 
    }

    public function getProfileData(string $pseudo): object
    {
        return  $this->respQuery->getCreditials($pseudo)[0]; 
    }

    public function is_up_to_date(string $pseudo,$post, array $data_user){
        if ($post->getMethod() == 'post' ){
            $post_data = $post->getPost(); 
            $error = $this->errorHunt->hunt_edit_profile($post_data);
            if(count($post_data) === 11 && count($error) === 0){ // * regarde si les donner envoyer son egale a 11 
                // * fonction qui dit qui a changer
                $must_be_modified = $this->who_changed($post_data, $data_user);
                // * modification du profile 
                $this->respQuery->updateProfile($must_be_modified, $pseudo, $data_user['prenom']); 
                // * partit pour les mot de passe 
                $password_entry = esc($post_data['new_password']);
                $password_entry_confirm = esc($post_data['new_password_confirm']);
                if(! empty($password_entry) && ! empty($password_entry_confirm)){
                    if($password_entry === $password_entry_confirm){
                        $passwd_bdd = $this->respQuery->getPasswordByPseudo($pseudo);
                        $password_hash = password_hash(esc($post_data['new_password']), PASSWORD_DEFAULT);
                        $this->respQuery->updatePassword($pseudo, $password_hash); 
                    }
                }return ['msg_succes','Votre changement a bien ete pris en compte'];
            }return ['msg_error', $error]; 
        }
    }

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
    public function managerImgProfile(string $civ, string $img_profile, string $pseudo){
        if(empty($img_profile)){
            if($civ === 'Mr'){
                return "mr.png";
            }return "mme.png"; // ! changer en webp 
        }
        return $this->respQuery->getImgByPseudo($pseudo); 
    }
}