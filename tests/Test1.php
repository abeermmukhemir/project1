<?php
/**
 * Created by PhpStorm.
 * User: Abeer
 * Date: 4/22/2018
 * Time: 12:36 AM
 */

include ("../src/BankA.php");
use PHPUnit\Framework\TestCase;

class Test1 extends TestCase
{
    protected  $_account;

    protected function setUp(){
        $this->_account=new Bank();
    }

    public function testZero(){
        $this->setUp();
        $this->assertTrue(0==0);
    }

}
