<?php namespace App;

use CodeIgniter\Test\CIUnitTestCase;

/**
 * @internal
 */
class CustomersTest extends CIUnitTestCase
{  
    public function testLogout(){
        $result = $this->call('get', 'customers/logout'); 
        $result->assertOk(); 
        
    }
     
}