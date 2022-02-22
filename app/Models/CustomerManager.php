<?php 
namespace App\Models; 

// class manager pour les clients
class CustomerManager{
    protected $respQuery; 

    public function __construct()
    {
        $this->respQuery = new UsersModel; 
    }

    public function getProfileData(string $pseudo): object
    {
        return  $this->respQuery->getCreditials($pseudo)[0]; 
    }

    public function updateData(string $pseudo,$post, array $data_user)
    {
        if ($post->getMethod() == 'post' ){
            $post_data = $post->getPost(); 
            $must_be_modified = []; // * tableau associatif des element qui on changer,clef: nom du champs, valuer: la valeur (bah oe ta crus quoi)
            if(count($post_data) === 11){ // * regarde si les donner envoyer son egale a 11 
                $password_entry = esc($post_data['new_password']);
                $password_entry_confirm = esc($post_data['new_password_confirm']);
                foreach($post_data as $keys=>$values){                    
                    if($keys !== 'new_password' && $keys !== 'new_password_confirm'){
                        if($post_data[$keys] !== $data_user[$keys]){
                            if($keys === "pseudo"){
                                $must_be_modified['compt_pseudo'] = esc($values); 
                            }else{
                                $must_be_modified["client_".$keys] = esc($values); 
                            }
                        }
                    }
                } // ! ajouter la methode pour ajouter les champs
                if(! empty($password_entry) && ! empty($password_entry_confirm)){
                    if($password_entry === $password_entry_confirm){
                        $passwd_bdd = $this->respQuery->getPasswordByPseudo($pseudo);
                        $this->respQuery->updatePassword($pseudo, esc($post_data['new_password'])); 
                    }
                }
            }
        }
    }
}