<?php 
namespace App\Models;
use CodeIgniter\Model; 
/**
* @file UsersModel.php
* @author Arthur Kurtz <email_arthur>
* @date 21/02/2022
* @brief Model pour les requete lier a la connexion
* @details 
* <p>Cette classe contient toute les requete SQL lier a la connexion</p>
**/

class UsersModel extends Model{
    protected $table         = 'clients';
    protected $primaryKey    = 'client_id';
    protected $allowedFields = [ "client_nom","client_prénom",
                                "client_adresse","client_cp" ,"client_ville" ,"client_pays" ,"client_email",
                                "client_tel", "compte_client","resrv_client","client_avis"
                                ];
    protected $returnType    = 'App\Entities\UserEntity';

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

      /**
    * @brief Méthode constructrice 
    * @details 
    * <p>Cette méthode appelle la méthode constructrice de la classe Model</p>
    **/
    public function __construct(){
        parent::__construct();
    }

     /** 
    * @brief Methode qui contient la requete SQL pour avoir les donner du client 
    * @details
    * <p>Elle recupere le pseudo, le mot de passe hasher, le nom, le prenom du clients </p>
    * @param string $username
    * @param string $password
    * @return array les donner du client
    */
    public function login(string $username,string $password){   
        $sql = 'SELECT compt_id AS id, compt_pseudo AS name,compt_pass AS passwd_hash, client_nom AS nom, client_prenom AS prenom
                FROM compte 
                INNER JOIN clients ON clients.client_id = compt_id
                WHERE compt_pseudo= ? AND compt_pass=?';
        return $this->db->query($sql, [esc($username), esc($password)])->getResult();
    }

     /** 
    * @brief Methode qui contient la requete SQL pour ajouter les information d'un nouveau client
    * @details
    * <p>Elle ajoute les donner personnelle du client</p>
    * @param string $contact
    * @param string $identify
    */
    public function appendUser(array $contact, array $identify){
        $builder_clients = $this->db->table('clients'); 
        $builder_compte = $this->db->table('compte'); 
        $builder_clients->insert($contact); 
        $builder_compte->insert($identify); 
        $builder_clients->get();
        $builder_compte->get(); 
    }

    /** 
    * @brief Methode qui contient la requete SQL pour savoir si l' email est deja pris
    * @details
    * <p>Elle renvoie , si il le trouve pas il renvoie un tableaux vide</p>
    * <p>Cette methode sera utiliser lors de la creation du compte</p>
    * @param string $contact
    * @param string $identify
    * @return array pseudo dans un tableaux
    */
    public function is_a_account_by_email(string $email): array{
        $sql = 'SELECT compt_pseudo FROM compte INNER JOIN clients ON clients.client_id=compt_id WHERE client_email="'.$email.'"';
        return $this->db->query($sql)->getResult(); 
    }


    /** 
    * @brief Methode qui contient la requete SQL pour savoir si le pseudo est deja pris
    * @details
    * <p>Elle renvoie le pseudo si il est deja pris par un compte, si il le trouve pas il renvoie un tableaux vide</p>
    * <p>Cette methode sera utiliser lors de la creation du compte</p>
    * @param string $pseudo
    * @return array pseudo dans un tableaux
    */
    public function is_a_account_by_pseudo(string $pseudo): array{
        $sql = 'SELECT compt_pseudo FROM compte WHERE compt_pseudo="'.esc($pseudo).'"';
        return $this->db->query($sql)->getResult(); 
    }

    /** 
    * @brief Methode qui contient la requete SQL pour recuperer toute les information du client par l'id
    * @details
    * <p>Elle renvoie toutel les information du client, ces information seront utiliser dans la page de profile</p>
    * @param string $id
    * @return array toute les information du client
    */
    public function getCreditials(string $id): array{
        $sql = 'SELECT client_nom AS nom, client_prenom AS prenom, client_adresse AS adresse, 
            client_cp AS cp, client_ville AS ville , client_pays AS pays , client_email AS email , 
            client_tel AS num_tel, client_profil_img AS img_profile, client_civ AS civ, compt_pseudo AS pseudo
            FROM clients 
            INNER JOIN compte ON clients.client_id = compte.compt_id WHERE compte.compt_id=?'; // ! mettre l'id est le tester
        return $this->db->query($sql, [$id])->getResult(); 
    }

     /** 
    * @brief Methode qui contient la requete SQL pour recuperer le mot de passe hasher par le pseudo
    * @details
    * <p>Elle renvoie le mot de passe hasher de l'utilisateur pour qu'elle sois utliser lors de la connexion, si le mot de passe correspand pas au pseudo elle renvoie une chaine vide </p>
    * @param string $id
    * @return string mot de passe hasher ou une chaine vide
    */
    public function getPasswordByPseudo(string $pseudo): string{
        $resp = $this->db->query('SELECT compt_pass FROM compte WHERE compt_pseudo= ?', [$pseudo])->getResult();
        if(count($resp) !== 0){ // ? la verif si jamais le pseudo il est pas dans la bdd
            return $resp[0]->compt_pass; 
        }return ''; 
    }

     /** 
    * @brief Methode qui contient la requete SQL pour mettre a jour le mot de passe 
    * @details
    * <p>Elle construit la requete pour mettre a jour le mot de passe, le nouveau mot de passe
    *                      dois etre hasher, elle utilise la methode getIdByPseudo pour recuperer l'id du pseudo. </p>
    * <p>Cette methode sera utiliser dans la modification de compte</p>
    * @param string $id
    * @param string $new_password
    */
    public function updatePassword(string $pseudo, string $new_password){
        $id_pseudo = $this->getIdByPseudo($pseudo); 
        $this->db->query('UPDATE compte SET compt_pass = ? WHERE  compt_id = ?', [$new_password, $id_pseudo]);
    }

    /** 
    * @brief Methode qui contient la requete SQL pour recuperer l'id par le pseudo 
    * @details
    * <p>Elle construit la requete pour avoir l'id a partir du pseudo </p>
    * @param string $pseudo
    * @return string l'id du compte
    */
    public function getIdByPseudo(string $pseudo): string {
        return $this->db->query('SELECT compt_id FROM compte WHERE compt_pseudo = ?', [$pseudo])->getResult()[0]->compt_id; 
    }

    /** 
    * @brief Methode qui contient la requete SQL pour recuperer l'id du client par le prenom 
    * @details
    * <p>Elle construit la requete pour avoir l'id du client a  partir du prenom</p>
    * @param string $pseudo
    * @return string l'id du compte
    */
    private function getIdByClient(string $prenom): string{
        return $this->db->query('SELECT client_id FROM clients WHERE client_prenom = ?', [$prenom])->getResult()[0]->client_id;  
    }

    /** 
    * @brief Methode qui contient la requete SQL pour mettre a jour le profile 
    * @details
    * <p>Elle recuperer les champs a ete modifier, elle construit la requete au fur est a mesure est l'execute</p>
    * @param string $data_for_update
    * @param string $pseudo
    * @param string $id
    */
    public function updateProfile(array $data_for_update, string $pseudo, string $id){
        if(array_key_exists('compt_pseudo', $data_for_update)){
            $this->db->query('UPDATE compte SET compt_pseudo=? WHERE compt_id=?', [$pseudo, $id]);  
        }
        $sql = 'UPDATE clients INNER JOIN compte ON compte.compt_id= clients.client_id SET ';
        foreach($data_for_update as $keys=>$values){
            $sql .= ' '.$keys.'="'.$values.'",'; 
        }
        if(strpos($sql,'=')){ //  regarde si = est present dans la requete, si c'est le cas ca veut dire que le client a fait des modif
            $sql = substr($sql,0,-1); // cette fonction supprimer le dernier element d'une chaine de caracter dans notre cas c'est le ' 
            $this->db->query($sql.' WHERE client_id=?', [$id]);  
        } 
    }
    
    /** 
    * @brief Methode qui contient la requete SQL pour supprimer l'utilisateur
    * @details
    * <p>Elle supprime les donner du client est son compte</p>
    * @param string $pseudo
    */
    public function deleteUser(string $pseudo){
        $id_pseudo = $this->getIdByPseudo($pseudo); 
        $query_clients = 'DELETE FROM clients WHERE client_id=?'; 
        $query_comptes = 'DELETE FROM compte WHERE compt_id=?'; 
        $this->db->query($query_clients, [$id_pseudo]);
        $this->db->query($query_comptes, [$id_pseudo]);
    } 

    /** 
    * @brief Methode qui contient la requete SQL pour recuperer l'image de profile
    * @details
    * <p>Elle recupere le nom de la photo de profile par l'id di client</p>
    * @param string $id
    */
    public function getImgByIdCustomers(string $id): string{
        return $this->db->query('SELECT client_profil_img 
                                FROM clients 
                                WHERE client_id=?', $id)->getResult()[0]->client_profil_img; 
    }
}
