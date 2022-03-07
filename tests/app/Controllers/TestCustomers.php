<?php

namespace App;

use CodeIgniter\Test\DatabaseTestTrait;
use CodeIgniter\Test\FeatureTestTrait;
use CodeIgniter\Test\CIUnitTestCase;


class TestCustomers extends CIUnitTestCase
{
    use DatabaseTestTrait, FeatureTestTrait;

    protected function setUp(): void
    {
        parent::setUp();

        $this->myClassMethod();
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        $this->anotherClassMethod();
    }


    protected function testlogout(){
        $result = $this->get('customers/logout'); 
        $result->assertOk(); 
        
    }
     
}