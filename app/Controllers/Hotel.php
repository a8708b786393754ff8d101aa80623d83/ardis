<?php
namespace App\Controllers;
/**
* @file Hotel.php
* @author Ayoub Brahim <ayoubbrahim68@gmail.com>
* @date 21/02/2022
* @brief Controller des Hôtels 
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

     /**
    * @brief Méthode constructrice 
    * @details 
    * <p>Cette méthode appelle la méthode constructrice de la classe Pages</p>
    **/
    public function __construct(){   
        parent::__construct(); 
    }
    
    /** 
    * @brief Méthode qui donne à la vue les éléments pour qu'ils soient affichés dans celle-ci
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
    * <p>Elle envoie un tableau de noms d'hôtels à Smarty pour qu'ils s'affichent dans la barre de navigation</p>
    * @param string $page 
    * @return array Nom de l'image appartenant à l'hôtel 
    */
    public function view($page){
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

        // pour la couleur du texte de la barre de navigation
        $this->_data['color_link_nav'] = 'black'; 
        $this->_data['meta_title']     = 'Hotel '.lcfirst($page); 
        $this->_data['name_file']      = lcfirst($page); 

        $this->display(lcfirst($page).'.tpl');
    }

}