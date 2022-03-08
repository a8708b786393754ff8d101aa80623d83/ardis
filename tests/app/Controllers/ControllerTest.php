<?php 
namespace CodeIgniter;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\DatabaseTestTrait;
use CodeIgniter\Test\FeatureTestTrait;
use CodeIgniter\Test\Fabricator;
use CodeIgniter\Test\ControllerTestTrait;
/**
* @file ControllerTest.php
* @author Ayoub Brahim <ayoubbrahim68@gmail.com>
* @date 5/03/2022
* @brief test des Controller
* @details 
* <p>Cette classe test tout les controller qui ont pas besoin de POST</p>
**/
/**
 * @internal
 */
class ControllerTest extends CIUnitTestCase{ 
    use DatabaseTestTrait,ControllerTestTrait; 

    public function tearDown():void{
        parent::tearDown();
    }

    public function setUp(): void{
        parent::setUp();
    }

    /**
    * @brief Méthode test pages index 
    * @details 
    * <p>Cette méthode test la methode index de la classe Pages en GET, elle affirme que le resulta est vrai</p>
    **/
    public function testPagesIndexCheck(){
        $result = $this->withURI('http://localhost/public/pages/')
                        ->controller(\App\Controllers\Pages::class)
                        ->execute('index'); 
        $this->assertTrue($result->isOk());  
    }

    /**
    * @brief Méthode test pages index 
    * @details 
    * <p>Cette méthode test la methode index de la classe Pages en GET, elle affirme que le resulta est vrai</p>
    **/
    public function testHotelViewCheck(){
        $result = $this->withURI('http://localhost/public/hotel/')
                        ->controller(\App\Controllers\Hotel::class)
                        ->execute('view', 'Sampatico');
        $this->assertTrue($result->isOk()); 
    }

    /**
    * @brief Méthode test activiter index
    * @details 
    * <p>Cette méthode test la methode index de la classe activiter en GET, elle affirme que le resulta est vrai</p>
    **/
    public function testActiviterIndexCheck(){
        $result = $this->withURI('http://localhost/public/activiter/')
                        ->controller(\App\Controllers\Activiter::class)
                        ->execute('index');
        $this->assertTrue($result->isOk()); 
    }

    /**
    * @brief Méthode test les activiter archiver
    * @details 
    * <p>Cette méthode test la methode archive de la classe Activiter en GET, elle affirme que le resulta est vrai</p>
    **/
    public function testActiviterArchiverCheck(){
        $result = $this->withURI('http://localhost/public/activiter/archive')
                        ->controller(\App\Controllers\Activiter::class)
                        ->execute('archive');
        $this->assertTrue($result->isOk()); 
    }

    /**
    * @brief Méthode test avis index
    * @details 
    * <p>Cette méthode test la methode index de la classe Avis en GET, elle affirme que le resulta est vrai</p>
    **/
    public function testAVisIndexCheck(){
        $result = $this->withURI('http://localhost/public/avis')
                        ->controller(\App\Controllers\Avis::class)
                        ->execute('index');
        $this->assertTrue($result->isOk()); 
    }

    /**
    * @brief Méthode test reservation index
    * @details 
    * <p>Cette méthode test la methode index de la classe Reservation en GET, elle affirme que le resulta est vrai</p>
    **/
    public function testReservationIndexCheck(){
        // si vous avez une  erreur c'est une permission a ajouter
        $result = $this->withURI('http://localhost/public/reservation')
                        ->controller(\App\Controllers\Reservation::class)
                        ->execute('index');
        $this->assertTrue($result->isOk()); 
    }
    
    /**
    * @brief Méthode test galerrie photo
    * @details 
    * <p>Cette méthode test la methode view de la classe PhotoGalerry en GET, elle affirme que le resulta est vrai</p>
    **/
    public function testPhotoGalleryViewCheck(){
        // si vous avez une erreur c'est une permission a ajouter
        $result = $this->withURI('http://localhost/public/galerie_photo')
                        ->controller(\App\Controllers\PhotoGallery::class)
                        ->execute('view');
        $this->assertTrue($result->isOk()); 
    }
}