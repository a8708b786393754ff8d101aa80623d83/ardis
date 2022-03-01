<?php 
namespace App\Controllers; 
use App\Config\Email;
class Emails {
    public string $from;
    public string $name; 
    public string $to; 
    public string $subject;
    public string $msg;

    public function construct(){
    //    parent::construct(); 
   }
   public function send(){
    $this->setFrom($this->$from, $this->$name);
    $this->setTo($this->$to);
    // $this->setCC('another@another-example.com');
    // $this->setBCC('them@their-example.com');

    $this->setSubject($this->$subject);
    $this->setMessage($this->$msg);

    $this->send();
   }

//   public 
}
