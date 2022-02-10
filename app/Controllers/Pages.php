<?php 

namespace App\Controllers; 

class Pages extends BaseController{

    public function index()
    {
        $this->_smarty->display("index.tpl");  
    }

    public function pages($page='index')
    {
        $this->_smarty->assign('name_file',$page);
        $this->_smarty->display($page.'.tpl');
    }
}