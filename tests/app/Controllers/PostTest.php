<?php
use CodeIgniter\Test\DatabaseTestTrait;
use CodeIgniter\Test\FeatureTestTrait;
use CodeIgniter\Test\CIUnitTestCase;

/**
* @file PostTest.php
* @author Ayoub Brahim <ayoubbrahim68@gmail.com>
* @date 5/03/2022
* @brief Test pour les Controller/methode qui ont besoin d'un post
* @details 
* <p>Cette classe test les methode des controller qui ont besoin d'une requete en POST/p>
**/
/**
 * @internal
*/
class PostTest extends CIUnitTestCase{
    public $fake; 
    use DatabaseTestTrait, FeatureTestTrait;


    protected function setUp(): void{
        require_once 'vendor/fakerphp/faker/src/autoload.php'; // composer require fakerphp/faker
        $this->fake = Faker\Factory::create('fr_FR'); // creer une instance de fake pour utiliser des faux information client
        parent::setUp();
    }

    protected function tearDown(): void{
        parent::tearDown();
    }

    /**
    * @brief Méthode test creer un compte 
    * @details 
    * <p>Cette méthode envoyer une requete POST avec les name qui sont correct</p>
    * <p>Elle affirme que la reponse est Ok</p>
    **/
    public function testPostCreateAccountCorrectName(){
        $value = [
            "lastname" => $this->fake->lastName(),
            "firstname" => $this->fake->firstNameFemale(),
            "civ" => 'mr',
            "tel" => $this->fake->phoneNumber(),
            "CP" => $this->fake->randomNumber(5, true),
            "city" => $this->fake->words(3, true),
            "email" => $this->fake->safeEmail(),
            "select" => 'France',
            "adresse" => 'ddssdfsdfsdf',
            "password" => $this->fake->password(2, 6),
            "Confirm_password" => $this->fake->password(2, 6),
        ];
        $result = $this->call('post','visitor/create_account', $value); 
        $this->assertTrue($result->isOk()); 
    }

    /**
    * @brief Méthode test creer un compte avec des name incorrect
    * @details 
    * <p>Cette méthode envoyer une requete POST avec les name qui sont pas correcte. /p>
    * <p>Elle affirme que la reponse est Ok</p>
    **/
    public function testPostCreateAccountIncorrectName(){
        $value = [
            "lastname" => $this->fake->lastName(),
            "rez" => $this->fake->firstNameFemale(),
            "cizerv" => 'mr',
            "telzer" => $this->fake->phoneNumber(),
            "CPzer" => $this->fake->randomNumber(5, true),
            "citzery" => $this->fake->words(3, true)[0],
            "email" => $this->fake->safeEmail(),
            "seleczert" => 'France',
            "adreszerse" => 'ddssdfsdfsdf',
            "passwozerrd" => $this->fake->password(2, 6),
            "Confirm_pzerzerzerassword" => $this->fake->password(2, 6),
        ];
        $result = $this->call('post','visitor/create_account', $value);
        $this->assertTrue($result->isOk()); 

        // ce test ma permis de verifier les name dans chaque input
    }

    /**
    * @brief Méthode test login
    * @details 
    * <p>Cette méthode envoyer une requete POST avec les name qui sont pas</p>
    * <p>Elle affirme que la reponse est Ok</p>
    **/
    public function testVisitorLoginIncorrectName(){
        // test si les names ne sont pas juste
        $value = [
            $this->fake->words(3, true)[0] => $this->fake->password(2,10),
            $this->fake->words(6, true)[0] =>$this->fake->userName(2,10),
        ];

        $result = $this->post('visitor/login', $value);
        $this->assertTrue($result->isOk()); 
    }

    /**
    * @brief Méthode test login avec des name incorrect
    * @details 
    * <p>Cette méthode envoyer une requete POST avec les name qui sont correct</p>
    * <p>Elle affirme que la reponse est Ok</p>
    **/
    public function testVisitorLoginCorrectName(){
        $value = [
            'password'=>$this->fake->password(2,10),
            'username'=>$this->fake->userName(2,10),
        ];

        $result = $this->post('visitor/login', $value);
        $this->assertTrue($result->isOk()); 
    }
}