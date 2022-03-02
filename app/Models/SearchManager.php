<?php 
 namespace App\Models; 
/**
* @file SearchManager.php
* @author Ayoub Brahim
* @date 27/02/2022
* @brief Manager pour le restaurant
*  @details 
* <p>Cette class gérer toute la logique pour executer une requete</p>
* <p>Les actions sont :</p>
* <ul>
* 	<li><strong>home</strong> : page d'accueil</li>
* 	<li><strong>blog</strong> : Liste des articles</li>
* </ul>
**/
class SearchManager{
    protected $objRequests; 
    protected string $input; 
    protected SearchModel $searchModel; 

    public function __construct($request){
        $this->objRequests = $request; 
    }
    
    private function initSearch():bool {
        if($this->objRequests->getMethod() === 'post'){
            $this->input = $this->objRequests->getPost('input'); 
            if(! empty($this->input)){
                $this->searchModel = new SearchModel($this->input); 
                return true; 
            }
        }return false; 
    }
    
    public function getResult(){
        if ($this->initSearch()){
            $data = []; 
            $resp_hotel = $this->searchModel->getResultHotel(); 
            $resp_avis  = $this->searchModel->getResultAvis();
            $resp_activ  = $this->searchModel->getResultActiv();

            if(count($resp_hotel) !== 0){
                $data['hotel'][] = $this->addElementArray($resp_hotel); 
            }if(count($resp_avis) !== 0){
                $data['avis'][] = $this->addElementArray($resp_avis); 
            }if(count($resp_activ) !== 0){
                $data['activiter'][] = $this->addElementArray($resp_activ); 
            }return $data; 
        }return []; 
    }

    private function addElementArray(array $elements){
        $data = [];
        for($i=0; $i < count($elements); $i++){
            foreach($elements[$i] as $key=>$element){
                $data[$key] = $element; 
            }
        }
        return $data; 
    }
}