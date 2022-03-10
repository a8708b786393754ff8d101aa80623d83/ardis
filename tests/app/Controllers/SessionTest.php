<?php
use CodeIgniter\Test\DatabaseTestTrait;
use CodeIgniter\Test\FeatureTestTrait;
use CodeIgniter\Test\CIUnitTestCase;
use Config\Services;
/**
* @file SessionTest.php
* @author Ayoub Brahim <ayoubbrahim68@gmail.com>
* @date 5/03/2022
* @brief Test pour les session
* @details 
* <p>Cette classe test les methode des controller qui ont besoin d'une session/p>
**/
/**
 * @internal
*/
class SessionTest extends CIUnitTestCase{
    use DatabaseTestTrait, FeatureTestTrait;
    
    public function setUp(): void{
        require_once 'vendor/fakerphp/faker/src/autoload.php'; // composer require fakerphp/faker
        $fake = Faker\Factory::create('fr_FR'); // creer une instance de fake pour tutiliser des faux indetnifiant
        //doc Faker: https://fakerphp.github.io/formatters/numbers-and-strings/
        
        // prepare un tableau avec des faux information qui seras utiliser 
        $this->values = ['pseudo' =>$fake->userName(),
            'nom'=> $fake->name()[0],
            'prenom'=> $fake->password(2, 8),
            'id'=> $fake->randomDigit()];
        parent::setUp();
    }

    public function tearDown(): void{
        parent::tearDown();
    }

    /**
    * @brief Méthode test avis 
    * @details 
    * <p>Cette méthode creer une session est fait une requete GET est affirme que la reponse est bonne</p>
    **/
    public function testAvis(){
        $result = $this->withSession($this->values)->get('visitor/login'); // envoie la session au login
        $this->assertTrue($result->isOk());
    }

    /**
    * @brief Méthode test le recus d'une reservation 
    * @details 
    * <p>Cette méthode creer une session est fait une requete GET est affirme que la reponse est bonne</p>
    **/
    public function testReservationRecus(){
        $result = $this->withSession($this->values)->get('reservation/recus');
        $this->assertTrue($result->isOk());
    }
}