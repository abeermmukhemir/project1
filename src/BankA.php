<?php
/**
 * Created by PhpStorm.
 * User: Abeer
 * Date: 4/16/2018
 * Time: 1:47 AM
 */

class Bank
{
    protected  $_balance;

    function __construct()
    {
        $this->_balance=0;
        return $this;
    }

    public function getBalance(){
        return $this->_balance;
    }

    public function deposit($amount){
        if ($amount<=0){
            echo("amount must be greater than 0");
        }
        $this->_balance+=$amount;
    }
}


