<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use Smarty; 

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 * 
 */
class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];
    protected array $_data;
	protected $_smarty;

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: 
        require_once(APPPATH.'ThirdParty/smarty/Smarty.class.php');
        $this->_smarty = new Smarty();
 
        $this->_smarty->setTemplateDir(APPPATH.'/Views/');
        $this->_smarty->setCompileDir(WRITEPATH.'cache');
        $this->_smarty->setCompileDir(WRITEPATH.'/cache/templates_c/');
        $this->_smarty->setConfigDir(WRITEPATH.'/cache/configs/');
        $this->_smarty->setCacheDir(WRITEPATH.'/cache/cache/');


	}
 
    public function display(string $strTemplate='index.tpl'){
        foreach($this->_data as $key=>$value){
            $this->_smarty->assign($key, $value);
        }
        
        // $this->_smarty->debugging = true;
        $this->_smarty->display($strTemplate);
    }
}
