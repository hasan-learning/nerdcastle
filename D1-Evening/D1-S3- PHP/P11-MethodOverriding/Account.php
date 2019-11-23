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

        public function setName($name)
        {
            $this->name = $name;
        }


        public function getNumber()
        {
            return $this->number;
        }

        public function setNumber($number)
        {
            $this->number = $number;
        }


        public function getBalance()
        {
            return $this->balance;
        }

        protected function setBalance($balance)
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
