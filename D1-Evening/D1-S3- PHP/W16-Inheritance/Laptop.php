<?php
include "ElectronicProduct.php";

class Laptop extends ElectronicProduct
{
    private $modelName;
    private $ramSizeInGB;
    private $processorSpeedInGHz;

    public function getModelName()
    {
        return $this->modelName;
    }

    public function setModelName($modelName): void
    {
        $this->modelName = $modelName;
    }

    public function getRamSizeInGB()
    {
        return $this->ramSizeInGB;
    }

    public function setRamSizeInGB($ramSizeInGB): void
    {
        $this->ramSizeInGB = $ramSizeInGB;
    }

    public function getProcessorSpeedInGHz()
    {
        return $this->processorSpeedInGHz;
    }

    public function setProcessorSpeedInGHz($processorSpeedInGHz): void
    {
        $this->processorSpeedInGHz = $processorSpeedInGHz;
    }


}