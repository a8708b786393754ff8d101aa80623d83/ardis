<?php 
namespace App\Models;
use CodeIgniter\Model; 

class Users_management extends Model
{
    protected $table         = 'clients';
    protected $primaryKey    = 'client_id';
    protected $allowedFields = ["client_id","client_nom","client_prénom",
                "client_adresse","client_cp" ,"client_ville" ,"client_pays" ,"client_email",
                "client_tel", "compte_client","resrv_client","client_avis"
                ];

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

    private function getId(string $table, string $element){
        if($table === 'compt_pseudo' || $table === 'client_id'){
            $sql = 'SELECT compt_id FROM compte WHERE '.$table.' = "'.$element.'" ';
            return $this->db->query($sql)->getResult(); 
        }

    }
    public function getPseudo(string $username,string $password)
    {
        $sql = 'SELECT compt_pseudo AS "name" FROM compte WHERE compt_pseudo= ? AND compt_pass=?';
        return $this->db->query($sql, [esc($username), esc($password)])->getResult();
    }
    public function appendUser(array $data)
    {

    }

    // public function delete()
    // {
        //utiliser la fonction getId pour pouvoir supprimer facilement
    //     // $this->db->delete(); 
    // }
}
