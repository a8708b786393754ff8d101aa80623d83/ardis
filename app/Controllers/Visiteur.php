<?php 

namespace App\Controllers; 
use App\Models\Users_management;

class Visiteur extends Pages{

    public function login()
    {
        echo 'dsxfsdfsdfsfqsdfqsfd';
        $this->_smarty->display('create_account.tpl');
        if ($request->getMethod() == 'post'){
            $this->_smarty->assign('user', $_POST);
        }
    }


    public function create_account(array $data)
    {
        $db = new Users_management(); 
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        // Set validation rules

        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('myform');
        }
        else
        {
                $this->load->view('formsuccess');
        }
        // if ($request->getMethod() == 'post'){
        //     var_dump('e ');
        //     $this->_smarty->assign('user', 'a');
        //     $this->_smarty->display('create_account.tpl');
        // }
        // if($db->find($data['email'])){
        //     //code si il a deja un compte
        //     return false; 
        // }
    }
}