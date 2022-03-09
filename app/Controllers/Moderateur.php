<?php
namespace App\Controllers;
/**
* @file Moderateur.php
* @author Ayoub Brahim <ayoubbrahim68@gmail.com>
* @date 10/02/2022
* @brief Controller du moderateur 
* @details 
* <p>Les actions sont :</p>
* <ul>
* 	<li><strong>panel</strong> : le panel admin</li>
* 	<li><strong>operateHotel</strong> :tout les operation lier aux hotels</li>
* </ul>
**/

class Moderateur extends Visitor{
    protected $tel;

    /**
    * @brief Méthode constructrice 
    * @details 
    * <p>Cette méthode appelle la méthode constructrice de la classe Visitor</p>
    * <p>Elle fait une codition sur le pseudo est l'id de la session, pour voir si il a les bons droit pour acceder </p>
    **/
    public function _construct(){
        parent::_construct();
        if($this->session->pseudo !== 'lithium' && $this->session->id !== "2"){
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    /**
    * @brief Méthode panel
    * @details 
    * <p>Cette methode donen a Smarty les element pour afficher le panel </p>
    * <p>Le panel est le meme pour l'admin est le modo, juste les fonctionnaliter qui seront plus afficher </p>
    **/
    public function panel(){
        $this->_data['nom_hotel'] = $this->allNamesHotels;
        $this->display('admin/admin.tpl'); 
    }
    

    /**
    * @brief Méthode pour les operation des hotel 
    * @details 
    * <p>Cette methode sert au operation (modification, suppressio) d'un hotel.</p>
    * @param string $name
    **/
    public function operateHotel(string $name){
        $this->_data['color_link_nav'] = "black";
        $this->_data['name_file']  = 'Hotel '.ucfirst($name);
        $this->_data['meta_title'] = "Operations de l'hotel".$name;

        if($this->request->getMethod() === 'post'){

            if($this->request->getVar('delete')){
                $this->hotelMngr->removeAll($name); 
                return redirect()->to('admin/panel/'); 
            }

            $data = $this->request->getPost(); 
            $msg = $this->hotelMngr->update(ucfirst($name), $data, $this->request); 
            $this->_data[$msg[0]] = $msg[1];
        }
  
        $respQuery = $this->hotelMngr->getData($name)[0]; 
        $this->name = $respQuery->hotel_nom; 
        $this->image = $respQuery->hotel_image; 
        $this->pays = $respQuery->hotel_pays; 
        $this->price = $respQuery->hotel_price; 
        $this->note = $respQuery->hotel_note; 
        $this->contenue = $respQuery->hotel_contenue; 
        $this->email = $respQuery->hotel_mail; 
        $this->ville = $respQuery->hotel_ville; 
        $this->tel  = $respQuery->hotel_tel; 
    
        $this->_data['name']        = $this->name;
        $this->_data['image']       = $this->image;
        $this->_data['pays']        = $this->pays;
        $this->_data['price']       = $this->price;
        $this->_data['note']        = $this->note;
        $this->_data['contenue']    = $this->contenue;
        $this->_data['email']       = $this->email;
        $this->_data['ville']       = $this->ville;
        $this->_data['tel']         = $this->tel;


        $this->display('admin/hotel.tpl'); 
    }
}
