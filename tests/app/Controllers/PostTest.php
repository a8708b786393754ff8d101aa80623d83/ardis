<?php
use CodeIgniter\Test\DatabaseTestTrait;
use CodeIgniter\Test\FeatureTestTrait;
use CodeIgniter\Test\CIUnitTestCase;


class PostTest extends CIUnitTestCase{
    public $fake; 
    use DatabaseTestTrait, FeatureTestTrait;

    protected function setUp(): void{
        require_once 'vendor/fakerphp/faker/src/autoload.php'; // composer require fakerphp/faker
        $this->fake = Faker\Factory::create('fr_FR'); // creer une instance de fake pour tutiliser des faux indetnifiant
        parent::setUp();
    }

    protected function tearDown(): void{
        parent::tearDown();
    }

   public function testPostCreateAccount(){
       // ! envoie d'un post pour verifier si tou marche bien
       $value = [
            "lastname" => $this->fake->lastName(),
            "firstname" => $this->fake->firstNameFemale(),
            "civ" => 'mr',
            "CP" => $this->fake->randomNumber(5, true),
            "city" => $this->fake->cityName(),
            "email" => $this->fake->safeEmail(),
            "tel" => $this->fake->phoneNumber(),
            "select" => 'France',
            "adresse" => 'ddssdfsdfsdf',
       ];
        $result = $this->post('visitor/create_account', $value);
        $this->assertTrue($result->isRedirect()); 
   }
}