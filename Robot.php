<?php

require_once('HardFloor.php');
require_once('CarpetFloor.php');
require_once('Validation.php');
require_once('Battery.php');


class Robot
{
    public function __construct(float $initialLevel)
    {
        // using composition
        $this->battery = new Battery($initialLevel);
    }

    public function cleanFloor(Floor $floor)
    {
        $timeRequiredToCleanUnitArea = $floor->getTimeRequiredToCleanUnitArea();
        // Formula to find charge consumed to clean 1 m**2 area
        $chargeConsumptionForOneUnit = (100*$timeRequiredToCleanUnitArea/Battery::TIME_TO_FULLCHARGE);
        echo "Initial State : \n";
        echo "chargingLevel : {$this->battery->chargeLevel}   Total Area:{$floor->totalArea} Area cleaned : {$floor->cleanedArea} m sq\n";
        while ($floor->cleanedArea<$floor->totalArea) {
            if ($this->battery->chargeLevel > 0 && ($this->battery->chargeLevel - $chargeConsumptionForOneUnit)>0) {
                $this->battery->chargeLevel = $this->battery->chargeLevel - $chargeConsumptionForOneUnit;
                $floor->cleanedArea = $floor->cleanedArea + 1;
                $rounded_charge = round($this->battery->chargeLevel, 2);
                echo "chargingLevel : {$rounded_charge}   Area cleaned : {$floor->cleanedArea} m sq\n";
            } else {
                $this->battery->chargeBattery();
            }
        }
        return $floor->cleanedArea;
    }


    public static function startRobot(array $options)
    {
        try {
            validate_options($options);
            if ($options) {
                $action = $options['action'];
                $floor = $options['floor'];
                $area = $options['area'];
                
                if (strtoupper($floor) == "HARD") {
                    $floor_obj = new HardFloor($area);
                } elseif (strtoupper($floor) == "CARPET") {
                    $floor_obj = new CarpetFloor($area);
                }
                // Assuming Robot is initially fully charged
                $robot = new Robot(100);
                $robot->cleanFloor($floor_obj);
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
