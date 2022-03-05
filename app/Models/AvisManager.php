<?php 
namespace App\Models; 
/**
* @file AvisManager.php
* @author Ayoub Brahim <ayoubbrahim68@gmail.com>
* @date 24/02/2022
* @brief Manager des hotel
* @details 
* <p>Cette classe  gérer toute la logique lier aux hotels pour executer la bonne requete</p>
**/

class AvisManager{
    protected $avisModel; 
    protected $imgModel; 
    protected $imMngr; 

    public function __construct(){
        $this->avisModel  = new AvisModel; 
        $this->imgMngr    = new ImageManager; 
        $this->imgModel   = new ImageModel; 
    }

    public function getAllData():array {
        $data = []; 
        $resp = $this->avisModel->getAvis();
        foreach($resp as $elements){
            $data[$elements->hotel_nom][] = $elements;
        }return $data;
    }


    public function addMngrAvis($objRequest, string $id_hotel){
        if($objRequest->getMethod() === 'post'){
            $data = $objRequest->getPost();
            $resp_upload_file = $this->imgMngr->imgAvisIsMatches($objRequest); 
            if(! is_array($resp_upload_file)){
                $this->avisModel->setAvis($data['title'], $data['message'], $data['note'], $id_hotel); 
                if(! empty($resp_upload_file)){
                    $this->imgModel->setAvisPhoto($resp_upload_file, $id_hotel);
                }
                return ['msg_success_avis', ' '];
            }else{
                return ['msg_error_avis', $resp_upload_file]; 
            }

        }

    }


    

}