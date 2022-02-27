<?php 
namespace App\Controllers; 
use App\Models\CustomerManager;
use App\Models\ImageManager;
/**
* @file Customers.php
* @author Ayoub Brahim <ayoubbrahim68@gmail.com>
* @date 21/02/2022
* @brief Controller des clients connecter 
* @details 
* <p>Les actions sont :</p>
* <ul>
* 	<li><strong>logout</strong> : se deconnecte du compte courant</li>
* 	<li><strong>profile</strong> : la page de profile</li>
* 	<li><strong>edite_profile</strong> : l'edition de profile</li>
* 	<li><strong>delete_profile</strong> : supression du compte courant</li>
* 	<li><strong>hydrate</strong> : pour mettre a jour les atrributs</li>
* </ul>
**/

class Customers extends Visitor{
    
    protected  $id; 
    protected string $pseudo;
    protected string $firstname; 
    protected string $name; 
    protected string $tel; 
    protected string $email; 
    protected string $adresse; 
    protected string $zip_code; 
    protected string $city; 
    protected string $civ; 
    protected string $photo_profile; 
    
    protected $imgManager;
    private $dataCreditials; 

    /**
    * @brief Methode constructrice 
    * @details 
    * <p>Cette methode constructrice appelle la methode constructrice de la classe Visitor</p>
    * <p>La methode constructrice initialise deux classe: </p>
    * <ul>
    * 	<li><strong>Attribut: custManager</strong> = CustomerManager</li>
    * 	<li><strong>Attribut: imgManager</strong> =  ImageManager</li>
    * </ul>
    * <p>Elle recupere l'id de l'utilisateur a partir de la session</p>
    **/
    public function __construct(){
        parent::__construct();
        $this->custManager = new CustomerManager;
        $this->imgManager = new ImageManager;
        $this->pseudo = $this->session->pseudo;
        $this->id = $this->session->id;
        $this->hydrate(); 
    }
    
    /**
    * @brief Methode hydrate 
    * @details 
    * <p></p>
    * <p>Cette methode mes a jour le pseudo de la session est de ses attribut: </p>
    * <ul>
    * 	<li><strong>firstname</strong>: prenom</li>
    * 	<li><strong>name</strong>: nom de famille</li>
    * 	<li><strong>tel</strong>: numero de télephone</li>
    * 	<li><strong>email</strong>: l'email</li>
    * 	<li><strong>adresse</strong>: adresse</li>
    * 	<li><strong>zip_code</strong>: code postal</li>
    * 	<li><strong>city</strong>: pays</li>
    * 	<li><strong>photo_profile</strong>: photo de profile </li>
    * 	<li><strong>civ</strong>: la civiliter</li>
    * </ul>
    * <p>Elle recupere les donner a partir de l'id grace a la methode getProfileData() de la classe CustomerManager </p>
    **/
    private function hydrate(){
        $objResp = $this->dataCreditials = $this->custManager->getProfileData($this->id);
        $this->session->set('pseudo', $objResp->pseudo); 

        $this->firstname = $objResp->prenom; 
        $this->name = $objResp->nom; 
        $this->tel = $objResp->num_tel; 
        $this->email = $objResp->email; 
        $this->adresse = $objResp->adresse; 
        $this->zip_code = $objResp->cp; 
        $this->city = $objResp->pays; 
        $this->photo_profile = $objResp->img_profile; 
        $this->civ = $objResp->civ; 
    }
    
     /**
    * @brief Methode lougout
    * @details
    * <p>Detruit la session est redirige a la page d'acceuil</p>
    */
    public function logout(){ 
        $this->session->destroy();  
        return redirect()->to('http://localhost/ardis/public/visitor/');
    }

    /**
    * @brief Methode profile 
    * @details 
    * <p>Cette methode affiche les donner de l'utilisateur qui sont stocker dans la base de donner</p>
    * <p>Elle hydrate les attributs du clients</p>
    * <p>Elle donne les donner a smarty pour qu'elle sois afficher</p>
    **/
    public function profile(){
        $this->hydrate();
        $this->_data['firstname']  = $this->firstname;
        $this->_data['name']  = $this->name;
        $this->_data['tel']  = $this->tel;
        $this->_data['email']  = $this->email;
        $this->_data['pseudo']  = $this->pseudo;
        $this->_data['adresse']  = $this->adresse;
        $this->_data['zip']  = $this->zip_code;
        $this->_data['city']  = $this->city;
        $this->_data['photo_profile']  = $this->custManager->managerImgProfile($this->civ, $this->photo_profile, $this->id);
        $this->view('profile'); 
    }
    
    /**
    * @brief Methode edite_profile 
    * @details 
    * <p>Cette methode envoie les erruer/message de succes a smarty</p>
    * <p>Elle televerse l'image de profile</p>
    * <p>Reutulisation de la methode profile pour afficher la page de profile</p>
    * <p>Elle donne les donner a smarty pour qu'elle sois afficher</p>
    **/
    public function edite_profile(){
        $this->photo_profile = $this->imgManager->management_uplaod_img($this->request, $this->pseudo);
        $resp = $this->custManager->is_up_to_date($this->pseudo, $this->request,$this->id,  
        [
            'pseudo'=>$this->pseudo,
            'prenom'=>$this->firstname,
            'nom'=>$this->name,
            'tel'=>$this->tel,
            'email'=>$this->email,
            'adresse'=>$this->adresse,
            'cp'=>$this->zip_code,
            'pays'=>$this->city,
            'photo_profile'=>$this->photo_profile,
            ]    
        );
        // l'index 0 est pour le type de message (erruer ou de succes)
        // l'index 1 est pour le(s) message(s)
        $this->_data[$resp[0]] = $resp[1];

        $this->hydrate();
        $this->profile(); 
    }
    
    /**
    * @brief Methode delete_profile
    * @details
    * <p>Cette methode supprime toutes les donner de l'utilisateur est redirige a la page d'acceuil</p>
    */
    public function delete_profile(){
        $this->custManager->delete_user_data($this->pseudo, $this->session); 
        return redirect()->to('http://localhost/ardis/public/visitor/');
    }
}