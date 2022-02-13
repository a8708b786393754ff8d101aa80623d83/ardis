<?php 
namespace App\Controllers; 
use App\Models\Users_management;

class UsersController extends BaseController{
    private $conn; 
    public function __construct(){

        $this->conn = new Users_management();
    }
    public function getName($id){
       return  $this->conn->get_all_data($id);

    }

    public function login()
    {
        $name = $this->input->post('login'); 
        var_dump($this->input);
        $this->verificate();
    }

}