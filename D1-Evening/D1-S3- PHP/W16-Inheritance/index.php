<?php
include "Laptop.php";

$aLaptop = new Laptop();
$aLaptop->setManufacturer("Dell");
$aLaptop->setModelName("XPS 13");
$aLaptop->setRamSizeInGB(8);
$aLaptop->setProcessorSpeedInGHz(3.5);
$aLaptop->setUnitPrice(80000);
$aLaptop->setCountryOfOrigin("USA");
$netPayable = $aLaptop->getUnitPriceAfterDiscount(5);

echo $netPayable;
