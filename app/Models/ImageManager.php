<?php
namespace App\Models;
define('MAX_SIZE', 300_000); // constante pour la taille maximum des fichier
/**
* @file ImageManager.php
* @author Ayoub Brahim <ayoubbrahim68@gmail.com>
* @date 25/02/2022
* @brief Manager des images 
* @details 
* <p>Cette classe  gére toute la logique liée aux images pour exécuter les résultats</p>
**/

class ImageManager{
    protected $imgModel; 
    protected $hotelModel; 
    protected $error; 
    protected $white_liste; 
    
    /**
    * @brief Méthode constructrice 
    * @details 
    * <p>Cette méthode constructrice initialise trois classes: </p>
    * <ul>
    * 	<li><strong>imgModel</strong> = ImageModel</li>
    * 	<li><strong>hotelModel</strong> =  Hotel</li>
    * 	<li><strong>error</strong> =  HuntError</li>
    * </ul>
    * <p> Elle initialise un tableau d'extensions acceptées</p>
    **/
    public function __construct(){
        $this->imgModel = new ImageModel; 
        $this->hotelModel = new HotelModel; 
        $this->error = new HuntError; 

        $this->white_list = ["png", "webp", 'jpeg', 'jpg']; 
    }

     /**
    * @brief Méthode qui fait les tests pour enregistrer la photo de profil 
    * @details 
    * <p>Cette méthode contient la requête SQL pour ajouter la photo de profil à l'utilisateur</p>
    * <p>Les tests s'appuient sur la méthode huntUplaodedFile() de la classe HuntError</p>
    * <p>Regarde si le nom de fichier n'est pas vide (si c'est le cas la photo de profil est precisée dans l'édition du profil)</p>
    * <p>Si l'image passe les tests de vérification, le nouveau nom de l'image sera ajouter à la base de données</p>
    * @return array Contient les erreurs liées au téléversement d'image de profil 
    **/
    public function management_uplaod_img($img_file, string $pseudo){
        $img_pre_uplaoded = $img_file->getFile('photo_profile'); 
        if (! empty($img_pre_uplaoded->getFileName())){
            $error = $this->error->huntUplaodedFile($img_pre_uplaoded, MAX_SIZE, $this->white_list); 
            if(count($error) === 0 ){
                $name_rand_file = $img_pre_uplaoded->getRandomName(); // nom aleatoire 
                $img_pre_uplaoded->move('assets/Images/profile/',$name_rand_file); //deplace le fichier 
                $this->imgModel->setImgProfile($pseudo, $name_rand_file); 
            }else{
                return $error; 
            }
        }
    }

    /**
    * @brief Méthode qui retourne un tableau associatif de données pour les images de chaques hôtels 
    * @details 
    * <p>Cette méthode a besoin d'un tableau de nom d'hôtels pour avoir l'id et récupérer les images de cet hôtel</p>
    * <p>Le nombre d'image maximum pour chaque hotel est de 4</p>
    * @param  array $allHotels
    * @param  int $max 
    * @return array tableau associatif, clef : nom de l'hôtel, valeur : tableau de noms d'images 
    */
    public function getAllData(array $allHotels, int $max=4){
        $arrImgHotels = []; 
        foreach($allHotels as $name){
            $id_hotel = $this->hotelModel->getIdByNameHotel($name)[0]->hotel_id;
            $img_name = $this->imgModel->getImgByIdHotel($id_hotel);  
            for($i=0; $i < $max; $i++){
                $arrImgHotels[$name][] = $img_name[$i]->image_nom; 
            }
        }
        return $arrImgHotels; 
    }

}