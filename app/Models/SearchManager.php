<?php 
namespace App\Models; 
/**
* @file SearchManager.php
* @author Ayoub Brahim
* @date 27/02/2022
* @brief Manager pour la recherche
*  @details 
* <p>Cette class gérer toute la logique pour executer la bonne requete</p>
**/
class SearchManager{
    protected $objRequests; 
    protected string $input; 
    protected SearchModel $searchModel; 

    /**
    * @brief Méthode constructrice
    * @details
    * <p>Elle stocke l'objet request</p>
    * @param  $request 
    **/
    public function __construct($request){
        $this->objRequests = $request; 
    }
    
    /**
    * @brief Méthode privée
    * @details
    * <p>Elle formatte les donner pour qu'elle seront plus facile a boucler dessus</p>
    * @param  array $elements
    * @return array donée formatter
    **/
    private function addElementArray(array $elements):array {
        $data = [];
        for($i=0; $i < count($elements); $i++){
            foreach($elements[$i] as $key=>$element){
                $data[$key] = $element; 
            }
        }
        return $data; 
    }

    /**
    * @brief Méthode privée qui intialise la recherche
    * @details
    * <p>Elle verifie la methode d'envoie</p>
    * <p>Si la methode d'envoie est en POST en la recupere est en verifie si elle n'est pas vide</p>
    * <p>De cette maniere en instancie la classe SearchModel.</p>
    * @param  $request 
    * @return bool 
    **/
    private function initSearch():bool {
        if($this->objRequests->getMethod() === 'post'){
            $this->input = $this->objRequests->getPost('input'); 
            if(! empty($this->input)){
                $this->searchModel = new SearchModel($this->input); 
                return true; 
            }
        }return false; 
    }
    
    /**
    * @brief Méthode constructrice
    * @details
    * <p>Elle execute les requetes pour avoir les resultats de la recherche, on cherche dans les hotels, les avis est les activiter (les non archiver)</p>
    * @return array resultat de la recherche bien formatter
    **/
    public function getResult(){
        if ($this->initSearch()){
            $data = []; 
            $resp_hotel = $this->searchModel->getResultHotel(); 
            $resp_avis  = $this->searchModel->getResultAvis();
            $resp_activ  = $this->searchModel->getResultActiv();

            if(! empty($resp_hotel)){ 
                $data['hotel'][] = $this->addElementArray($resp_hotel); 
            }if(! empty($resp_avis)){
                $data['avis'][] = $this->addElementArray($resp_avis); 
            }if(! empty($resp_activ)){
                $data['activiter'][] = $this->addElementArray($resp_activ); 
            }return $data; 
        }return []; 
    }
}