<?php
require_once "Account.php";

    class CheckingAccount extends Account
    {
        private $serviceCharge;

        public function getServiceCharge()
        {
            return $this->serviceCharge;
        }

        public function setServiceCharge($serviceCharge): void
        {
            $this->serviceCharge = $serviceCharge;
        }


        public function __construct($name, $number)
        {
            parent::__construct($name, $number);
            echo "Checking constructor is being called"; echo "<br>";
        }

    }
