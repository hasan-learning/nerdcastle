<?php
require_once "Account.php";

    class SavingsAccount extends Account
    {
        private $interestAmount;

        public function getInterestAmount()
        {
            return $this->interestAmount;
        }

        public function setInterestAmount($interestAmount): void
        {
            $this->interestAmount = $interestAmount;
        }

    }
