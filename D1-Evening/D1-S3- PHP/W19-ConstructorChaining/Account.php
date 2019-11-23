<?php

    class Account
    {
        private $name;
        private $number;
        private $balance;

        public function getName()
        {
            return $this->name;
        }

        public function setName($name): void
        {
            $this->name = $name;
        }

        public function getNumber()
        {
            return $this->number;
        }

        public function setNumber($number): void
        {
            $this->number = $number;
        }

        public function getBalance()
        {
            return $this->balance;
        }

        protected function setBalance($balance): void
        {
            $this->balance = $balance;
        }





        public function __construct($name, $number)
        {
            $this->name = $name;
            $this->number = $number;
            echo "Account constructor is being called"; echo "<br>";
        }

        public function deposit($amount){
            $this->balance +=$amount;
        }

        public function withdraw($amount){
            $this->balance -= $amount;
        }
    }
