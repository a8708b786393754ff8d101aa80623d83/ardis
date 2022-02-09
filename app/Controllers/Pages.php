<?php 

namespace App\Controllers; 
require_once 'smarty/Smarty.class.php';

class Pages extends BaseController{
    protected $smarty; 

    public function __construct()
    {
        $this->smarty = new Smarty(); 
    }
    public function index()
    {
        $this->smarty->display("app/Views/index.tpl");  
    }

    // public function activiter()
    // {
        // return view("activiter");
    // }
}