<?php 

namespace App\Controllers; 

class Pages extends BaseController{

    public function index()
    {
        $this->_smarty->display("index.tpl");  
    }

    public function activiter()
    {
        $this->_smarty->display("activiter.tpl");  
    }
    protected function admin()
    {
        $this->_smarty->display("admin.tpl");
    }

    public function avis()
    {
        $this->_smarty->display('avis.tpl'); 
    }

    public function create_account()
    {
        $this->_smarty->display('create_account.tpl'); 
    }

    public function galerie_photo()
    {
        $this->_smarty->display('galerie_photo.tpl'); 
    }

    public function login()
    {
        $this->_smarty->display('login.tpl'); 
    }

    public function mdp_oublier(){
        $this->_smarty->display('mdpoublier.tpl');
    }
}