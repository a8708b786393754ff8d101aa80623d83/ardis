<?php
namespace App\Controllers;
/**
* @file Admin.php
* @author Ayoub Brahim <ayoubbrahim68@gmail.com>
* @date 14/02/2022
* @brief Controller des visiteurs 
* @details 
* <p>Les actions sont :</p>
* <ul>
* 	<li><strong>panel</strong> : le panel admin</li>
* 	<li><strong>operateHotel</strong> :tout les operation lier aux hotels</li>
* 	<li><strong>mdpoublier</strong> : pour le mot de passe oublié</li>
* </ul>
**/

class Moderateur extends Visitor{
    protected $tel;

    public function _construct(){
        parent::_construct();
        var_dump($this->session->pseudo, $this->session->id); 
        if($this->session->pseudo !== 'lithium' && $this->session->id !== "2"){
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function panel(){
        $this->_data['nom_hotel'] = $this->allNamesHotels;
        $this->display('admin/admin.tpl'); 
    }
    

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
