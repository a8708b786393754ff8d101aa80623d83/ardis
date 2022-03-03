<?php 
namespace App\Controllers; 
use App\Models\CustomerManager;
use App\Models\ImageManager;
/**
* @file Customers.php
* @author Ayoub Brahim <ayoubbrahim68@gmail.com>
* @date 21/02/2022
* @brief Controller des clients connectés 
* @details 
* <p>Les actions sont :</p>
* <ul>
* 	<li><strong>logout</strong> : se déconnecte du compte courant</li>
* 	<li><strong>profile</strong> : la page de profil</li>
* 	<li><strong>edite_profile</strong> : l'édition du profil</li>
* 	<li><strong>delete_profile</strong> : supression du compte courant</li>
* 	<li><strong>hydrate</strong> : pour mettre à jour les attributs</li>
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
    protected  $photo_profile; 
    
    protected ImageManager $imgManager;
    protected CustomerManager $custManager;
    private $dataCreditials; 

    /**
    * @brief Méthode constructrice 
    * @details 
    * <p>Cette méthode appelle la méthode constructrice de la classe Visitor</p>
    * <p>La méthode constructrice initialise deux classes : </p>
    * <ul>
    * 	<li><strong>Attribut : custManager</strong> = CustomerManager</li>
    * 	<li><strong>Attribut : imgManager</strong> =  ImageManager</li>
    * </ul>
    * <p>Elle récupére l'id de l'utilisateur à partir de la session</p>
    **/
    public function __construct(){
        parent::__construct();
        $this->custManager = new CustomerManager;
        $this->imgManager = new ImageManager;
        $this->pseudo = $this->session->pseudo;
        $this->id = $this->session->id;
        $this->updateAttribut(); 
    }
    
    /**
    * @brief Méthode updateAttribut 
    * @details 
    * <p></p>
    * <p>Cette méthode met à jour le pseudo de la session et de ses attributs : </p>
    * <ul>
    * 	<li><strong>firstname</strong> : prénom</li>
    * 	<li><strong>name</strong> : nom de famille</li>
    * 	<li><strong>tel</strong> : numéro de téléphone</li>
    * 	<li><strong>email</strong> : l'email</li>
    * 	<li><strong>adresse</strong> : pays</li>
    * 	<li><strong>photo_profile</strong> : photo de profil </li>
    * 	<li><strong>civ</strong> : la civilité</li>
    * </ul>
    * <p>Elle récupére les données à partir de l'id grâce à la méthode getProfileData() de la classe CustomerManager </p>
    **/
    private function updateAttribut(){
        $objResp = $this->dataCreditials = $this->custManager->getProfileData($this->id);
        $this->session->set('pseudo', $objResp->pseudo); 

        $this->pseudo = $objResp->pseudo; 
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
    * @brief Méthode lougout
    * @details
    * <p>Détruit la session et redirige vers la page d'acceuil</p>
    */
    public function logout(){ 
        $this->session->destroy();  
        return redirect()->to('http://localhost/ardis/public/visitor/');
    }

    /**
    * @brief Méthode profile 
    * @details 
    * <p>Cette méthode affiche les données de l'utilisateur qui sont stockées dans la base de données</p>
    * <p>Elle hydrate les attributs du client</p>
    * <p>Elle soumet les données à Smarty pour qu'elles soient affichées</p>
    **/
    public function profile(){
        $this->updateAttribut();
        $this->_data['firstname']  = $this->firstname;
        $this->_data['name']  = $this->name;
        $this->_data['tel']  = $this->tel;
        $this->_data['email']  = $this->email;
        $this->_data['pseudo']  = $this->pseudo;
        $this->_data['adresse']  = $this->adresse;
        $this->_data['zip']  = $this->zip_code;
        $this->_data['city']  = $this->city;
        $this->_data['photo_profile'] = $this->custManager->managerImgProfile($this->civ, $this->photo_profile, $this->id); 
        $this->view('profile'); 
    }
    
    /**
    * @brief Méthode edite_profile 
    * @details 
    * <p>Cette méthode envoie les erreurs/message de succès à Smarty</p>
    * <p>Elle téléverse l'image de profil</p>
    * <p>Réutilisation de la méthode profile pour afficher la page de profil</p>
    * <p>Elle soumet les données à Smarty pour qu'elles soient affichées</p>
    **/
    public function edite_profile(){
        $resp = $this->custManager->is_up_to_date($this->pseudo, $this->request,$this->id,[
            'pseudo'=>$this->pseudo,
            'prenom'=>$this->firstname,
            'nom'=>$this->name,
            'tel'=>$this->tel,
            'email'=>$this->email,
            'adresse'=>$this->adresse,
            'cp'=>$this->zip_code,
            'pays'=>$this->city
            ]    
        );
        // l'index 0 est pour le type de message (d'erreur ou de succès)
        // l'index 1 est pour le(s) message(s)
        $this->_data[$resp[0]] = $resp[1];
        $this->_data['msg_error_profile'] = $this->imgManager->updateProfileOrError($this->request, $this->pseudo);
        
        $this->updateAttribut(); 
        $this->profile(); 
    }
    
    /**
    * @brief Méthode delete_profile
    * @details
    * <p>Cette méthode supprime toutes les données de l'utilisateur et redirige vers la page d'acceuil</p>
    */
    public function delete_profile(){
        $this->custManager->delete_user_data($this->pseudo, $this->session); 
        return redirect()->to('http://localhost/ardis/public/visitor/');
    }
}