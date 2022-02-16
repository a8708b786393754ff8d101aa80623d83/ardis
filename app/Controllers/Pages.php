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

    public function view($page='index',$element=false)
    {
        $color_link = $this->color_link_nav($page, $element); 
        $this->_smarty->assign('color_link_nav',$color_link);
        $this->_smarty->assign('name_file',$page);
        $this->_smarty->display($page.'.tpl');
    }

    public function color_link_nav($page, $bool): string 
    {
        if($page === 'index'){
            return 'white'; 
        }
        elseif($page === 'mdpoublier' || $page === 'login'){
            if($bool !== 'init'){
                $this->_smarty->assign('message',$bool);
                return 'black'; 
            }
            return 'black'; 
        }
        else{
            return 'black'; 
        }
    }
}