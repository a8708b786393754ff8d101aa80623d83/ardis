<?php 
namespace App\Controllers; 
class SendMail extends Pages{ 
    
    public $objEmail; // ! Cette objet va utiliser la email, je sais pas pk mais il ets pas content quand on y herite
    public string $from;
    public string $name; 
    public string $to; 
    public string $subject;
    public string $msg;

    public function construct(){
        parent::__construct();
       $this->objEmail =  \Config\Services::email(); 
       //    var_dump($this->request->getPost());
    } 
    
    public function index(){
        var_dump($this->request->getMethod());
        $this->_data['color_link_nav'] = 'black';
        $this->_data['name_file']      = 'mail';
        $this->_data['meta_title']     = 'Envoyer un email'; 
        $this->display('pageMail.tpl');

    }
   public function send(){
    $this->objEmail->setFrom($this->$from, $this->$name);
    $this->objEmail->setTo($this->$to);
    // $this->setCC('another@another-example.com');
    // $this->setBCC('them@their-example.com');

    $this->objEmail->setSubject($this->$subject);
    $this->objEmail->setMessage($this->$msg);

    $this->objEmail->send();
   }

// ! ajouter mr.png est mme.png dans le dossier assets/Images/profile/
}
