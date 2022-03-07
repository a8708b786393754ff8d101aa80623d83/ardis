<?php
namespace App\Models;
use App\Libraries\HuntError; 
define('MAX_SIZE', 500_000); // constante pour la taille maximum des fichier
/**
* @file ImageManager.php
* @author Ayoub Brahim <ayoubbrahim68@gmail.com>
* @date 25/02/2022
* @brief Manager des images 
* @details 
* <p>Cette classe  gérer toute la logique lier aux image pour executer les resultat</p>
**/

class ImageManager{
    protected $imgModel; 
    protected $hotelModel; 
    protected $error; 
    protected $white_liste; 
    
    /**
    * @brief Methode constructrice 
    * @details 
    * <p>Cette methode constructrice initialise trois classe: </p>
    * <ul>
    * 	<li><strong>imgModel</strong> = ImageModel</li>
    * 	<li><strong>hotelModel</strong> =  Hotel</li>
    * 	<li><strong>error</strong> =  HuntError</li>
    * </ul>
    * <p> Elle initialise un tableaux d'extension accepeter</p>
    **/
    public function __construct(){
        $this->imgModel = new ImageModel; 
        $this->hotelModel = new HotelModel; 
        $this->error = new HuntError; 

        $this->white_list = ["png", "webp", 'jpeg', 'jpg']; 
    }

     /**
    * @brief Methode qui fait les tests pour enregistrer la photo de profile 
    * @details 
    * <p>Cette methode continet la requete SQL pour ajouter la photo de profile a l'utilisateur</p>
    * <p>Les test s'appuye sur la methode huntUplaodedFile() de la classe HuntError</p>
    * <p>Regarde si le nom de fichier n'est pas vide (si c'est le cas la photo de profile n'est preciser dans l'edition de profile)</p>
    * <p>Si l'image passe les test de verification, le nouveaux nom de l'image serais ajouter a la base de donner</p>
    * @return array Contient erreur lier au televersement d'image de profile 
    **/
    public function updateProfileOrError($img_file, string $pseudo){
        $img_pre_uplaoded = $img_file->getFile('photo_profile'); 
        $name_file_or_error = $this->imageIsmatches($img_pre_uplaoded, 'assets/Images/profile/'); 
        if(is_string($name_file_or_error)){
            $this->imgModel->setImgProfile($pseudo, $name_file_or_error); 
        }else{
            return $name_file_or_error; 
        }
    }

    private function imageIsmatches($objFile, string $target_folder){
        if(! empty($objFile->getFileName()) ){
            $error = $this->error->huntUplaodedFile($objFile, MAX_SIZE, $this->white_list); 
            if(empty($error)){
                $name_rand_file  = $objFile->getRandomName(); 
                $objFile->move($target_folder, $name_rand_file); 
                return $name_rand_file; 
            }else{
                return $error; 
            }
        }
    }

    public function imgAvisIsMatches($objFile){
        $picture = $objFile->getFile('photo_avis_clients'); 
        $name_file_or_error = $this->imageIsmatches($picture, 'assets/Images/avis/'); 
        if(is_array($name_file_or_error)){
            return $name_file_or_error; 
        }
    }

    /**
    * @brief Methode qui retournez un tableaux associatif de donner pour les image de chaque hotel
    * @details 
    * <p>Cette methode a besoin d'un tableaux de nom d'hotels pour avoir l'id est recuperer les image de cette hotels</p>
    * <p>Le nombre d'image maximum pour chaque hotel est de 4</p>
    * @param  array $allHotels
    * @param  int $max 
    * @return array tableaux associatif, clef: nom de l'hotel, valeur: tableaux de nom d'image 
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