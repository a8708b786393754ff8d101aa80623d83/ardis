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
    // protected $returnType    = 'App\Entities\User_entity';

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';


    public function __construct()
    {
        parent::__construct();
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

    private function is_account(string $table, string $element){
        if($table === 'compt_pseudo' || $table === 'client_email'){
            if ($table === 'client_email'){
                $sql = 'SELECT compt_id FROM compte INNER JOIN clients   WHERE ?= "?" ';
            }else{
                $sql = 'SELECT compt_id FROM compte WHERE ? = "?" ';
            }return $this->db->query($sql, [$table, $element])->getResult(); 
        }

    }
    public function getPseudo(string $username,string $password)
    {
        $sql = 'SELECT compt_pseudo AS "name" FROM compte WHERE compt_pseudo= ? AND compt_pass=?';
        return $this->db->query($sql, [esc($username), esc($password)])->getResult();
    }

    public function appendUser(array $data)
    {
        $id = $this->is_account('client_email', $data['client_email']);
        if(count($id) === 1){
            // $add_user = $this->db->table('client'); 
            // $add_user->select("")
            
            return true; 
        } return false; 
    }

    // public function delete()
    // {
        //utiliser la fonction getId pour pouvoir supprimer facilement
    //     // $this->db->delete(); 
    // }
}
