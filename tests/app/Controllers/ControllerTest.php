<?php 
namespace CodeIgniter;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\DatabaseTestTrait;
use CodeIgniter\Test\FeatureTestTrait;
use CodeIgniter\Test\Fabricator;
use CodeIgniter\Test\ControllerTestTrait;



class ControllerTest extends CIUnitTestCase{ 
    use DatabaseTestTrait,ControllerTestTrait; 

    public function tearDown():void{
        parent::tearDown();
    }

    public function setUp(): void{
        parent::setUp();
    }
    public function testPagesIndexCheck(){
        $result = $this->withURI('http://localhost/public/pages/')
                        ->controller(\App\Controllers\Pages::class)
                        ->execute('index'); 
        $this->assertTrue($result->isOk());  
    }

    public function testHotelViewCheck(){
        $result = $this->withURI('http://localhost/public/hotel/')
                        ->controller(\App\Controllers\Hotel::class)
                        ->execute('view', 'Sampatico');
        $this->assertTrue($result->isOk()); 
    }

    public function testActiviterIndexCheck(){
        $result = $this->withURI('http://localhost/public/activiter/')
                        ->controller(\App\Controllers\Activiter::class)
                        ->execute('index');
        $this->assertTrue($result->isOk()); 
    }

    public function testActiviterArchiverCheck(){
        $result = $this->withURI('http://localhost/public/activiter/archive')
                        ->controller(\App\Controllers\Activiter::class)
                        ->execute('archive');
        $this->assertTrue($result->isOk()); 
    }

    public function testAVisIndexCheck(){
        $result = $this->withURI('http://localhost/public/avis')
                        ->controller(\App\Controllers\Avis::class)
                        ->execute('index');
        $this->assertTrue($result->isOk()); 
    }

    public function testReservationIndexCheck(){
        // si vous vaez une  erreur c'est une permission a ajouter
        $result = $this->withURI('http://localhost/public/reservation')
                        ->controller(\App\Controllers\Reservation::class)
                        ->execute('index');
        $this->assertTrue($result->isOk()); 
    }
    
    public function testPhotoGalleryViewCheck(){
        // si vous vaez une  erreur c'est une permission a ajouter
        $result = $this->withURI('http://localhost/public/galerie_photo')
                        ->controller(\App\Controllers\PhotoGallery::class)
                        ->execute('view');
        $this->assertTrue($result->isOk()); 
    }
}