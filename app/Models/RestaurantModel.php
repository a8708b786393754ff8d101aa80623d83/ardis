<?php 
namespace App\Models;
use CodeIgniter\Model; 
/**
* @file RestaurantModel.php
* @author Brahim Ayoub <ayoubbrahim68@gmail.com>
* @date 14/02/2022
* @brief Model pour la restauration
* @details 
* <p>La methode contient les requete pour ceux qui est a rapport avec la menu/restaurantion</p>
**/

class RestaurantModel  extends Model{
    protected $table         = 'menu';
    protected $primaryKey    = 'menu_id';
    protected $allowedFields = [ "menu_nom","menu_descri","menu_image"];

    protected $returnType    = 'App\Entities\MenuEntity';

    protected $useTimestamps = true;

    /**
    * @brief Methode constructrice 
    * @details 
    * <p>Cette methode constructrice appelle la methode constructrice de la classe Model</p>
    **/
    public function __construct(){
        parent::__construct(); 
    }


     /** 
    * @brief Methode qui contient la requete SQL pour avoir les tout les donner de la menu/restaurantion 
    * @details
    * <p>Elle recupere le nom du menu, le prix, la description est l'image </p>
    * @return array les donner des menu/restaurantion
    */
    public function getAllData() {
        return $this->db->query('SELECT menu_nom AS nom, menu_prix AS price , menu_descri AS descri, menu_image AS image  
                                FROM menu')->getResult();
    }



}