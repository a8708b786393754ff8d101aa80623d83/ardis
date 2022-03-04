<?php 
namespace App\Models;
use CodeIgniter\Model; 

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

    public function getCreditials(string $id){
        $sql = 'SELECT client_nom AS nom, client_prenom AS prenom, client_adresse AS adresse, 
            client_cp AS cp, client_ville AS ville , client_pays AS pays , client_email AS email , 
            client_tel AS num_tel, client_profil_img AS img_profile, client_civ AS civ, compt_pseudo AS pseudo
            FROM clients 
            INNER JOIN compte ON clients.client_id = compte.compt_id WHERE compte.compt_id=?'; // ! mettre l'id est le tester
        return $this->db->query($sql, [$id])->getResult(); 
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
    
    public function getIdByPseudo(string $pseudo): string {
        return $this->db->query('SELECT compt_id FROM compte WHERE compt_pseudo = ?', [$pseudo])->getResult()[0]->compt_id; 
    }

    private function getIdByClient(string $prenom){
        return $this->db->query('SELECT client_id FROM clients WHERE client_prenom = ?', [$prenom])->getResult()[0]->client_id;  
    }

    /**
     * Methode qui fait la requete pour mettre a jour
     * @param array 
     */
    public function updateProfile(array $data_for_update, string $pseudo, $id){
        if(array_key_exists('compt_pseudo', $data_for_update)){
            $this->db->query('UPDATE compte SET compt_pseudo=? WHERE compt_id=?', [$pseudo, $id]);  
        }
        // TODO recuperer l'id a la place du prenom
        $sql = 'UPDATE clients INNER JOIN compte ON compte.compt_id= clients.client_id SET ';
        foreach($data_for_update as $keys=>$values){
            $sql .= ' '.$keys.'="'.$values.'",'; 
        }
        // ! faut faire le test sinon elle renvoie une erruer
        if(strpos($sql,'=')){ // ? regarde si = est present dans la requete, si c'est le cas ca veut dire que le client a fait des modif
            $sql = substr($sql,0,-1); // ? cette fonction supprimer le dernier element d'une chaine de caracter dans notre cas c'est le ' 
            $this->db->query($sql.' WHERE client_id=?', [$id]);  
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
    public function getImgByIdCustomers(string $id){
        return $this->db->query('SELECT client_profil_img 
                                FROM clients 
                                WHERE client_id=?', $id)->getResult()[0]->client_profil_img; 
    }

    public function getNbLit(string $hotel_name):array {
        return $this->db->query("SELECT hotel_nom , chambres.hotel_id AS chambre_id , chamb_num, chamb_dispo as dispo  ,nbr_lit 
                                FROM hotels
                                INNER JOIN chambres
                                ON hotels.hotel_id = chambres.hotel_id 
                                WHERE chamb_dispo = 1 AND hotel_nom = ?
                                LIMIT 1", [$hotel_name])->getResult(); 
    }

}
