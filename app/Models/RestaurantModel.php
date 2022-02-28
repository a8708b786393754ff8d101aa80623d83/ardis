<?php 
namespace App\Models;
use CodeIgniter\Model; 
/**
* @file Visitor.php
* @author Arthur Kurt <ayoubbrahim68@gmail.com>
* @date 14/02/2022
* @brief Controller des visiteur 
* @details 
* <p>Les actions sont :</p>
* <ul>
* 	<li><strong>index</strong> : pour afficher la page d'acceuil</li>
* 	<li><strong>view</strong> : pour afficher toutes les  page </li>
* </ul>
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

    public function getAllData() {
        return $this->db->query('SELECT menu_nom AS nom, menu_prix AS price , menu_descri AS descri, menu_image AS image  
                                FROM menu')->getResult();
    }



}