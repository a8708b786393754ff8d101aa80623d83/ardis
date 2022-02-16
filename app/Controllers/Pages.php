<?php 
namespace App\Controllers; 

class Pages extends BaseController{
    protected $session; 
    protected $hotelCtrl; 

    public function __construct(){
        $this->session = session();
        $this->hotelCtrl = new HotelController; 
        helper('url');
    }

    public function index()
    {
        $this->_smarty->assign('element',$this->hotelCtrl->index());
        $this->_smarty->assign('color_link_nav','white');
        $this->_smarty->assign('name_file','index');
        $this->_smarty->display('index.tpl');  
    }

    public function view(string $page='index',$element=false)
    {
        if($page === 'index'){
            $this->_smarty->assign('element',$this->hotelCtrl->index());
            $this->_smarty->assign('message',$element);
        }
        $color_link = $this->color_link_nav($page, $element); 
        $this->_smarty->assign('color_link_nav',$color_link);
        $this->_smarty->assign('name_file',$page);
        $this->_smarty->display($page.'.tpl');
    }

    protected function color_link_nav(string $page, $elements): string 
    {
        if($page === 'index'){
            return 'white'; 
        }
        elseif($page === 'mdpoublier' || $page === 'login' || $page === 'create_account'){
            if($elements !== 'init'){
                $this->_smarty->assign('message',$elements); 
            }
        }return 'black'; 
    }
}