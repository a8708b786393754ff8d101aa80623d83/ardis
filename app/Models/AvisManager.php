<?php 
namespace App\Models; 
/**
* @file AvisManager.php
* @author Ayoub Brahim <ayoubbrahim68@gmail.com>
* @date 23/02/2022
* @brief Manager des hotel
* @details 
* <p>Cette classe  gérer toute la logique lier aux hotels pour executer la bonne requete</p>
**/

class AvisManager{
    protected $avisModel; 
    protected $imgModel; 
    protected $imMngr; 

    /**
    * @brief Méthode constructrice 
    * @details 
    * <p>La méthode instancie l'objet AvisModel, ImageManager, ImageModel </p>
    **/
    public function __construct(){
        $this->avisModel  = new AvisModel; 
        $this->imgMngr    = new ImageManager; 
        $this->imgModel   = new ImageModel; 
    }

    /**
    * @brief Méthode qui recupere les avis 
    * @details 
    * <p>Cette méthode recupere les avis de chaque hotel</p>
    * @return array les données des avis 
    **/
    public function getAllData():array {
        $data = []; 
        $resp = $this->avisModel->getAvis(); 
        foreach($resp as $elements){
            $data[$elements->hotel_nom][] = $elements;
        }return $data;
    }

    /**
    * @brief Méthode qui ajoute un avis 
    * @details 
    * <p>Cette méthode verifie la methode d'envoye, si c'est en post, elle recuperer les données est 
    *                   verifie si les entrée respecte les regle de securiter</p>
    * <p>Elle ajoute le message, le titre de l'avis,si il y a une photo elle rajoute juste apres le titre est ele contenue</p>
    * @return array message d'erruer/de succcée  
    **/
    public function addMngrAvis($objRequest, string $id_hotel){
        if($objRequest->getMethod() === 'post'){
            $data = $objRequest->getPost();
            $resp_upload_file = $this->imgMngr->imgAvisIsMatches($objRequest); 
            if(! is_array($resp_upload_file)){
                $this->avisModel->setAvis($data['title'], $data['message'], $data['note'], $id_hotel); 
                if(! empty($resp_upload_file)){
                    $this->imgModel->setAvisPhoto($resp_upload_file, $id_hotel);
                }
                return ['msg_success_avis', 'Votre avis a ete pris en compte.'];
            }else{
                return ['msg_error_avis', $resp_upload_file]; 
            }
        }
    }
}