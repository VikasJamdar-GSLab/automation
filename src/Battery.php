<?php
namespace src\Battery;

class Battery
{
    private $chargeLevel;
    const TIME_TO_FULLCHARGE = 60;

    public function __construct(float $initialLevel)
    {
        $this->chargeLevel = $initialLevel;
    }

    // using magic methods __get and __set to get and set properties

    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }
    
    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    
        return $this;
    }

    public function chargeBattery()
    {
        $timer = 0;
        $this->chargeLevel = 0;
        while ($timer<60) {
            $this->chargeLevel = $this->chargeLevel + (100/Battery::TIME_TO_FULLCHARGE);
            $timer = $timer + 1;
            echo "Charging robot : ".round($this->chargeLevel, 2)."\n";
        }
        echo "Resuming to cleaning...\n";
        return $this->chargeLevel;
    }
}
