<?php 
namespace App\Models;
use CodeIgniter\Model; 

class Users_management extends Model
{
    protected $table      = 'clients';
    protected $primaryKey = 'client_id';
    
    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ["client_id","client_nom","client_prénom","client_adresse","client_cp" ,"client_ville" 
        ,"client_pays" ,"client_email","client_tel", "compte_client","resrv_client","client_avis"];

    // protected $useTimestamps = true;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;

    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
    }

    public function add_user(array $data)
    {
        return $this->db->find($data['name']);
        
    }

    // public function delete($id)
    // {

    // }

    // public function update(array $data)
    // {

    // }

    // public function insert(array $data)
    // {

    // }

    public function get_all_data($name)
    {
        return $this->db->query('select* from clients')->getResult();
    }
}
