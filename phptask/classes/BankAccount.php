<?php

class BankAccount implements IfaceBankAccount
{

    private $balance = null;

    public function __construct(Money $openingBalance)
    {
        $this->balance = $openingBalance;
    }

    public function balance()
    {
        return $this->balance;
    }

    public function deposit(Money $amount)
    {
        $bal_amt = (array)$this->balance;
        $dep_amt = (array)$amount;
        $this->balance = $bal_amt['amount']+$dep_amt['amount'];
    }

    public function withdraw(Money $amount)
    {         
         error_reporting(0);
         $bal_amt = (array)$this->balance;
         $dep_amt = (array)$amount;
         if($bal_amt['amount']>=$dep_amt['amount']){
             $this->balance = $bal_amt['amount']-$dep_amt['amount'];
         }else{
             throw new Exception('Withdrawl amount larger than balance');
         }
    }

    public function transfer(Money $amount, BankAccount $account)
    {
         error_reporting(0);
         $t_bal_amt = (array)$this->balance();      
         $t_tr_amt = (array)$amount;
         if($t_bal_amt[0]>=$t_tr_amt['amount']){
             $this->balance = $t_bal_amt[0]-$t_tr_amt['amount'];
         }else{
             throw new Exception('Withdrawl amount larger than balance');
         }

         $d_bal_amt = (array)$account->balance();      
         $d_dep_amt = (array)$amount;       
         $account->balance = $d_bal_amt[0]+$d_dep_amt['amount'];
    }
}