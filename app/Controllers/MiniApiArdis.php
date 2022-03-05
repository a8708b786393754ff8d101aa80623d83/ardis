<?php
namespace App\Controllers;
use App\Models\ActiviterModel;
/**
* @file Hotel.php
* @author Arthur Krutz <emaild'arhur>
* @date 21/02/2022
* @brief  
* @details 
* <p>Les actions sont :</p>
* <ul>
* 	<li><strong>getActivByName</strong> : elle affiche les activiter de l'hotel concerner</li>
* </ul>
**/
class MiniApiArdis extends BaseController{
    private $activMdl ;


    /**
    * @brief Méthode constructrice 
    * @details 
    * <p>Cette méthode appelle la méthode constructrice de la classe BaseController</p>
    **/
    public function __construct(){
        $this->activMdl = new ActiviterModel;    
    }

    /**
    * @brief Méthode getActivByName 
    * @details 
    * <p>Cette méthode verifie si elle recois une requete de type GET, si c'est le cas elle recuper le nom de l'hotel passe en parametre (url?hotel_name)</p>
    **/
    public function getActivByName(){
        if($this->request->getMethod() === 'get'){
            $data=$this->request->getVar('hotel_name');
            if(isset($data)) {
                echo  json_encode($this->activMdl->getActivByHotelReserv($data));
            }
        }
    }
}
?>