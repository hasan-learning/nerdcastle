<?php


interface Printing
{
    public function prints();
    public function cancelPrinting($jobNo);
}