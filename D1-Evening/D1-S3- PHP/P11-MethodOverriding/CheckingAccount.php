<?php
require_once "Account.php";

    class CheckingAccount extends Account
    {
        public $serviceCharge;

        public function __construct($name, $number)
        {
            parent::__construct($name, $number);
            echo "Checking constructor is being called"; echo "<br>";
        }

    }
