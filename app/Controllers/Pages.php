<?php 

namespace App\Controllers; 

class Pages extends BaseController{
    protected $session; 

    public function __construct(){
        $this->session = session();
        helper('url');
    }

    public function index()
    {
        $this->_smarty->assign('color_link_nav','white');
        $this->_smarty->assign('name_file','index');
        $this->_smarty->display('index.tpl');  
    }

    public function view($page='index')
    {
        if($page === 'index'){ // verifie pour la nav bar en blanc
            $this->_smarty->assign('color_link_nav','white');
        }else{
            $this->_smarty->assign('color_link_nav','black');
        }
        $this->_smarty->assign('name_file',$page);
        $this->_smarty->display($page.'.tpl');
    }
}