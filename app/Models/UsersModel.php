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
    protected $returnType    = 'App\Entities\User_entity';

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function __construct()
    {
        parent::__construct();
    }
    public function getPseudo(string $username,string $password)
    {
        $sql = 'SELECT compt_pseudo AS "name" FROM compte WHERE compt_pseudo= ? AND compt_pass=?';
        return $this->db->query($sql, [esc($username), esc($password)])->getResult();
    }

    public function appendUser(array $contact, array $identify)
    {
        $id = $this->getEmail($contact['client_email']);
        if(is_array($id)){
            if(count($id) === 0){
                $builder_clients = $this->db->table('clients'); 
                $builder_compte = $this->db->table('compte'); 
                $builder_clients->insert($contact); 
                $builder_compte->insert($identify); 

                $builder_clients->get(); 
                $builder_compte->get(); 
                return true; 
            }
        } return false; 
    }

    public function getEmail(string $email)
    {
        $sql = 'SELECT compt_pseudo FROM compte INNER JOIN clients ON clients.client_id=compt_id WHERE client_email="'.$email.'"';
        return $this->db->query($sql)->getResult(); 
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
