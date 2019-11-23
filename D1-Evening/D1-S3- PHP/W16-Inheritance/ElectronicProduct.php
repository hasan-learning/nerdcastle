<?php


class ElectronicProduct
{
        private $manufacturer;
        private $countryOfOrigin;
        private $unitPrice;


    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    public function setManufacturer($manufacturer): void
    {
        $this->manufacturer = $manufacturer;
    }

    public function getCountryOfOrigin()
    {
        return $this->countryOfOrigin;
    }

    public function setCountryOfOrigin($countryOfOrigin): void
    {
        $this->countryOfOrigin = $countryOfOrigin;
    }

    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    public function setUnitPrice($unitPrice): void
    {
        $this->unitPrice = $unitPrice;
    }



        public function getUnitPriceAfterDiscount($discountPercent)
        {
            return $this->unitPrice - ($this->unitPrice * $discountPercent) / 100;
        }
}