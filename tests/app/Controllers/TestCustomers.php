<?php

namespace App;

use CodeIgniter\Test\CIUnitTestCase;

class TestCustomers extends CIUnitTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

    }

    protected function tearDown(): void
    {
        parent::tearDown();

    }
    
    protected function testLogout(){
        $result = $this->call('get', 'customers/logout'); 
        $result->assertOk(); 
        
    }
     
}