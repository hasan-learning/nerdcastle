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



    }
