<?php
require_once "Account.php";

    class SavingsAccount extends Account
    {
        public $interestAmount;

        public function __construct($name, $number, $interestAmount)
        {
            parent::__construct($name, $number);
            $this->interestAmount = $interestAmount;
            echo "Savings constructor is being called"; echo "<br>";
        }

        public function withdraw($amount){
            if ($this->getBalance() - $amount >= 0)
            {
                parent::withdraw($amount);
            }
            else
            {

            }
        }
    }
