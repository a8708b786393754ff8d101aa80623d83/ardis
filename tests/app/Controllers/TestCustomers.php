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

    }

    protected function tearDown(): void
    {
        parent::tearDown();

    }


    protected function testlogout(){
        $result = $this->get('customers/logout'); 
        $result->assertOk(); 
        $result->assertOk(); 
        $result->assertOk(); 
        
    }
     
}