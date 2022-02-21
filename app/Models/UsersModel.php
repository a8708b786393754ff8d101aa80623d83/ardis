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

    public function __construct()
    {
        parent::__construct();
    }

    public function login(string $username,string $password)
    {   
        $sql = 'SELECT compt_id AS "id", compt_pseudo AS "name" FROM compte WHERE compt_pseudo= ? AND compt_pass=?';
        return $this->db->query($sql, [esc($username), esc($password)])->getResult();
    }

    public function appendUser(array $contact, array $identify)
    {
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

    public function is_a_account_by_pseudo(string $pseudo)
    {
        $sql = 'SELECT compt_pseudo FROM compte WHERE compt_pseudo="'.esc($pseudo).'"';
        return $this->db->query($sql)->getResult(); 
    }

    public function getCreditials(string $pseudo)
    {
        $sql = 'SELECT client_nom AS nom, client_prenom AS prenom, client_adresse AS adresse, 
            client_cp AS cp, client_ville AS ville , client_pays AS pays , client_email AS email , 
            client_tel AS num_tel 
            FROM clients 
            INNER JOIN compte ON clients.client_id = compte.compt_id WHERE compt_pseudo = ?';
        return $this->db->query($sql, [$pseudo])->getResult(); 
    }

    

    // public function updateUser(array $dataUpdate)
    // {
    //     if(isset($data['compt_pseudo']) || isset($data['compt_pass'])){
    //         foreach($data as $keys=>$values){
    //             $id = intval($this->getId($, $values)); 
    //             $this->db->update($id, )
    //         }
    //     }
    // }

    // public function delete()
    // {
        //utiliser la fonction getId pour pouvoir supprimer facilement
    //     // $this->db->delete(); 
    // }

    //public function getId(string $table, string $element){
        //     if($table === 'compt_pseudo' || $table === 'client_email'){
        //         if ($table === 'client_email'){
        //             $sql = 'SELECT compt_pseudo FROM compte INNER JOIN clients ON clients.client_id=compt_id WHERE client_email="'.$element.'"';
        //         }else{
        //             $sql = 'SELECT compt_id FROM compte WHERE '.$table.' = "'.$element.'" ';
        //         }
        //         return $this->db->query($sql)->getResult(); 
        //     }return false; 
    
        // }
}
