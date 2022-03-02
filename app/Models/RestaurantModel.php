<?php 
namespace App\Models;
use CodeIgniter\Model; 
/**
* @file RestaurantModel.php
* @author Arthur Kurt <ayoubbrahim68@gmail.com>
* @date 14/02/2022
* @brief Model pour la restauration
* @details 
* <p>La méthode contient les requetes en lien avec le menu/la restauration</p>
**/

class RestaurantModel  extends Model{
    protected $table         = 'menu';
    protected $primaryKey    = 'menu_id';
    protected $allowedFields = [ "menu_nom","menu_descri","menu_image"];

    protected $returnType    = 'App\Entities\MenuEntity';

    protected $useTimestamps = true;

    /**
    * @brief Méthode constructrice 
    * @details 
    * <p>Cette méthode appelle la méthode constructrice de la classe Model</p>
    **/
    public function __construct(){
        parent::__construct(); 
    }


     /** 
    * @brief Méthode qui contient la requête SQL pour avoir les toutes les données du menu/de la restauration 
    * @details
    * <p>Elle récupére le nom du menu, le prix, la description et l'image </p>
    * @return array les donnés des menus/de la restauration
    */
    public function getAllData() {
        return $this->db->query('SELECT menu_nom AS nom, menu_prix AS price , menu_descri AS descri, menu_image AS image  
                                FROM menu')->getResult();
    }



}