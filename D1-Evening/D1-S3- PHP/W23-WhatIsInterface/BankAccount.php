<?php


interface BankAccount
{
    public function deposit($amount);
    public function withdraw($amount);
}