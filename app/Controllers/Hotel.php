<?php
namespace App\Controllers;
use App\Models\UserManager;
use App\Models\AvisManager;
use App\Models\HotelManager;
/**
* @file Hotel.php
* @author Ayoub Brahim <ayoubbrahim68@gmail.com>
* @date 21/02/2022
* @brief Controller des hôtels 
* @details 
* <p>Les actions sont :</p>
* <ul>
* 	<li><strong>view</strong> : affiche la page de l'hôtel</li>
* </ul>
**/

class Hotel extends Pages{
    protected string $name;
    protected string $image;
    protected string $pays;
    protected string $price;
    protected string $ville;
    protected string $note;
    protected string $contenue;
    protected string $email;

    protected UserManager $userMgr;
    protected AvisManager $avisMngr;

    /**
    * @brief Méthode constructrice 
    * @details 
    * <p>Cette méthode appelle la méthode constructrice de la classe Pages</p>
    * <p>Elle instancie l'objet UserManager, AVisManager, HotelManager </p>
    **/
    public function __construct(){   
        parent::__construct(); 
        $this->userMgr = new UserManager; 
        $this->avisMngr = new AvisManager; 
        
        $this->_data['color_link_nav']   = 'black'; 
    }
    
    /** 
    * @brief Méthode qui donne à la vue les éléments pour que les page des hotels s'affiches
    * @details
    * <p>Elle récupére les données de l'hôtel grâce à la méthode getData de la classe HotelManager</p>
    * <p>Elle initialise les variables</p>
    * <ul>
    * 	<li><strong>Attribut : name</strong> :  nom de l'hôtel</li>
    * 	<li><strong>Attribut : image</strong> : image principale de  l'hôtel</li>
    * 	<li><strong>Attribut : pays</strong> :  pays où est situé l'hôtel</li>
    * 	<li><strong>Attribut : ville</strong> : ville l'hôtel</li>
    * 	<li><strong>Attribut : price</strong> : prix de la nuit de l'hôtel</li>
    * 	<li><strong>Attribut : note</strong> :  note de l'hôtel</li>
    * 	<li><strong>Attribut : contenue</strong> : paragraphe de présentation de l'hôtel</li>
    * 	<li><strong>Attribut : email</strong> :    email de l'hôtel</li>
    * </ul>
    * <p>Elle prefixe l'object du l'email et son contenue.</p>
    * @param  $page 
    */
    public function view($page){
        try {
            $respQuery = $this->hotelMngr->getData($page)[0]; 
            $this->name = $respQuery->hotel_nom; 
            $this->image = $respQuery->hotel_image; 
            $this->pays = $respQuery->hotel_pays; 
            $this->price = $respQuery->hotel_price; 
            $this->note = $respQuery->hotel_note; 
            $this->contenue = $respQuery->hotel_contenue; 
            $this->email = $respQuery->hotel_mail; 
            $this->ville = $respQuery->hotel_ville; 
        
            $this->_data['name']        = $this->name;
            $this->_data['image']       = $this->image;
            $this->_data['pays']        = $this->pays;
            $this->_data['price']       = $this->price;
            $this->_data['note']        = $this->note;
            $this->_data['contenue']    = $this->contenue;
            $this->_data['email']       = $this->email;
            $this->_data['ville']       = $this->ville;
    
            $this->_data['meta_title']       = 'Hotel '.lcfirst($page); 
            $this->_data['name_file']        = lcfirst($page); 
            $this->_data['object_prefixed']  = "Hotel Ardis ".$page; 
            $this->_data['msg_prefixed']     = "Un ami veut vous  partager un hôtel de la chaine Ardis qu \' il a trouver. Pour le découvrir , cliquer sur ce lien :".base_url('hotel/'.$this->name);
    
    
            $this->display(lcfirst($page).'.tpl');   
        } catch (\Throwable $th) {
            $this->response->setStatusCode(404, 'Nope. Not here.');
        }
    }



    /** 
    * @brief Méthode qui donne à la vue les éléments pour qu'ils soient affichés dans celle-ci
    * @details
    * <p>Elle est utiliser quand on un visiteur ou un client veut partager un hotel par email</p>
    * <p>Elle récupére les données pour envoyer l'email</p>
    * <p>Elle prefixe l'object du l'email et son contenue.</p>
    */
    public function sendMail(){
        $this->_data['meta_title']     = "Envoie d'email"; 
        $this->_data['name_file']      = "result_email"; 


        if($this->request->getMethod() === 'post'){ // verifie toujour la methode 
            if($this->userMgr->isMatchForSendMail($this->request->getPost())){ // regarde si l'email respecte le bon format
                
                $this->objEmail->setTo(esc($this->request->getVar('mailTo'))); 
                $this->objEmail->setFrom('ardis.hotel68@gmail.com', 'Hotel Ardis'); 
                $this->objEmail->setSubject(esc($this->request->getVar('subject'))); 
                $this->objEmail->setMessage(esc($this->request->getVar('message'))); 
                if ($this->objEmail->send()){
                    $this->_data['msg_succes'] = "L'email a bien été envoyer!";
                }else{
                    $this->_data['msg_error'] = 'Veuillez verifier votre destinateur'; 
                }
            }else{
                $this->_data['msg_error'] = 'Veuillez entrez est verifier vos champs'; 
            }
        }
        $this->display('result_email.tpl'); 
    }

    /** 
    * @brief Méthode d'ajout d'avis 
    * @details
    * <p>Elle recupere l'id du nom de l'hotel.</p>
    * <p>Elle envoie un tableau de message d'erruer/de succes à Smarty pour qu'ils s'affichent dans la page d'hotel</p>
    * @param string $page 
    */
    public function addAvis($page){
        $id_hotel = $this->hotelMngr->getNameById($page); 
        $error_or_success = $this->avisMngr->addMngrAvis($this->request, $id_hotel);
        $this->_data[$error_or_success[0]] = $error_or_success[1];
        $this->view($page); 
    }
}