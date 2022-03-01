<?php 
namespace App\Controllers; 
class Emails{
    public $objEmail; // ! Cette objet va utiliser la email, je sais pas pk mais il ets pas content quand on y herite
    public string $from;
    public string $name; 
    public string $to; 
    public string $subject;
    public string $msg;

    public function construct(){
       $this->objEmail =  \Config\Services::email(); 
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

// ! ajouter mr.png est mme.png dans le dossier assets/Images/profile/
}
