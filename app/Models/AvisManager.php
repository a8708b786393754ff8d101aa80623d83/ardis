<?php 
namespace App\Models; 
use App\Models\AvisModel;
/**
* @file AvisManager.php
* @author Ayoub Brahim <ayoubbrahim68@gmail.com>
* @date 24/02/2022
* @brief Manager des avis
* @details 
* <p>Cette classe  gére toute la logique liée aux avis pour exécuter la bonne requête</p>
**/

class AvisManager{
    protected $avisModel; 

    public function __construct(){
        $this->avisModel  = new AvisModel; 
    }

    public function getAllData():array {
        $data = []; 
        $resp = $this->avisModel->getAvis();
        foreach($resp as $elements){
            $data[$elements->hotel_nom][] = $elements;
        }return $data;
    }

}