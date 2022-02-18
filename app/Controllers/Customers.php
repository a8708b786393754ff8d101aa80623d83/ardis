<?php 
namespace App\Controllers; 

class Customers extends Visitor{

    public function __construct()
    {
        parent::__construct();
    }
    public function logout()
    {
        $this->session->destroy();  // le tester  
        return redirect()->to('http://localhost/ardis/public/customers/');
    }

    public function profile($pseudo)
    {
        // $msg = $this->userManager->verificate_create_account($this->request->getMethod()); 
        $this->_data['pseudo'] = esc($pseudo); 
        $this->view('profile'); 
    }

    public function  edit_profile()
    {
        $this->view('modif_profile'); 
    }
}