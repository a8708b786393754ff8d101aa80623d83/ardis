<?php 
namespace App\Models;
use CodeIgniter\Model; 

class UsersModel extends Model
{
    protected $table         = 'clients';
    protected $primaryKey    = 'client_id';
    protected $allowedFields = ["client_id","client_nom","client_prénom",
                                "client_adresse","client_cp" ,"client_ville" ,"client_pays" ,"client_email",
                                "client_tel", "compte_client","resrv_client","client_avis"
                                ];
    protected $returnType    = 'App\Entities\UserEntity';

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function __construct(){
        parent::__construct();
    }

    public function login(string $username,string $password){   
        $sql = 'SELECT compt_id AS "id", compt_pseudo AS "name",compt_pass AS "passwd_hash" FROM compte WHERE compt_pseudo= ? AND compt_pass=?';
        return $this->db->query($sql, [esc($username), esc($password)])->getResult();
    }

    public function appendUser(array $contact, array $identify){
        $builder_clients = $this->db->table('clients'); 
        $builder_compte = $this->db->table('compte'); 
        $builder_clients->insert($contact); 
        $builder_compte->insert($identify); 
        $builder_clients->get();
        $builder_compte->get(); 
    }

    public function is_a_account_by_email(string $email)
    {
        $sql = 'SELECT compt_pseudo FROM compte INNER JOIN clients ON clients.client_id=compt_id WHERE client_email="'.$email.'"';
        return $this->db->query($sql)->getResult(); 
    }

    public function is_a_account_by_pseudo(string $pseudo){
        $sql = 'SELECT compt_pseudo FROM compte WHERE compt_pseudo="'.esc($pseudo).'"';
        return $this->db->query($sql)->getResult(); 
    }

    public function getCreditials(string $pseudo){
        $sql = 'SELECT client_nom AS nom, client_prenom AS prenom, client_adresse AS adresse, 
            client_cp AS cp, client_ville AS ville , client_pays AS pays , client_email AS email , 
            client_tel AS num_tel, client_profil_img AS img_profile, client_civ AS civ
            FROM clients 
            INNER JOIN compte ON clients.client_id = compte.compt_id WHERE compt_pseudo = ?';
        return $this->db->query($sql, [$pseudo])->getResult(); 
    }

    public function getPasswordByPseudo(string $pseudo): string{
        $resp = $this->db->query('SELECT compt_pass FROM compte WHERE compt_pseudo= ?', [$pseudo])->getResult();
        if(count($resp) !== 0){ // ? la verif si jamais le pseudo il est pas dans la bdd
            return $resp[0]->compt_pass; 
        }return ''; 
    }

    public function updatePassword(string $pseudo, string $new_password){
        $id_pseudo = $this->getIdByPseudo($pseudo); 
        $this->db->query('UPDATE compte SET compt_pass = ? WHERE  compt_id = ?', [$new_password, $id_pseudo]);
    }

    // ? 
    
    private function getIdBeyPsudo(string $pseudo): string {
        return $this->db->query('SELECT compt_id FROM compte WHERE compt_pseudo = ?', [$pseudo])->getResult()[0]->compt_id; 
    }

    private function getIdByClient(string $prenom){
        return $this->db->query('SELECT client_id FROM clients WHERE client_prenom = ?', [$prenom])->getResult()[0]->client_id;  
    }

    public function updateProfile(array $data_for_update, string $pseudo, string $prenom_client){
        if(array_key_exists('compt_pseudo', $data_for_update)){
            $id_pseudo = $this->getIdByPseudo($pseudo);
            $this->db->query('UPDATE compte SET compt_pseudo=? WHERE compt_id=?', [$pseudo, $id_pseudo]);  
        }
        $id_prenom_client = $this->getIdByClient($prenom_client); 
        $sql = 'UPDATE clients SET';
        foreach($data_for_update as $keys=>$values){
            $sql .= ' '.$keys.'="'.$values.'",'; 
        }
        // ! faut faire le test sinon elle renvoie une erruer
        if(strpos($sql,'=')){ // ? regarde si = est present dans la requete, si c'est le cas ca veut dire que le client a fait des modif
            $sql = substr($sql,0,-1); // ? cette focntion supprimer le dernier element d'une chaine de caracter dans notre cas c'est le ' 
            $this->db->query($sql.' WHERE client_prenom=?', [$prenom_client]);  
        } 
    }
    
    public function deleteUser($pseudo){
        $id_pseudo = $this->getIdByPseudo($pseudo); 
        $query_clients = 'DELETE FROM clients WHERE client_id=?'; 
        $query_comptes = 'DELETE FROM compte WHERE compt_id=?'; 
        $this->db->query($query_clients, [$id_pseudo]);
        $this->db->query($query_comptes, [$id_pseudo]);
    } 

    // ? Recupere l'image pars le pseudo
    public function getImgByPseudo(string $pseudo){
        $id = $this->getIdBeyPsudo($pseudo); 
        return $this->db->query('SELECT client_profil_img FROM clients WHERE client_id=?', $id)->getResult(); 
    }
}
