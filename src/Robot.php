<?php
namespace src\Robot;

require_once('HardFloor.php');
require_once('CarpetFloor.php');
require_once('Validator.php');
require_once('Battery.php');
use src\Floor\Floor;
use src\HardFloor\HardFloor;
use src\CarpetFloor\CarpetFloor;
use src\Battery\Battery;
use src\Validator as Validator;

class Robot
{
    public function __construct(float $initialLevel)
    {
        // using composition
        $this->battery = new Battery($initialLevel);
    }

    public function cleanFloor(Floor $floor)
    {
        $timeRequiredToCleanUnitArea =get_class($floor)::TIME_TO_CLEAN_UNIT_AREA;
        // Formula to find charge consumed to clean 1 m**2 area
        $chargeConsumptionForOneUnit = (100*$timeRequiredToCleanUnitArea/Battery::TIME_TO_FULLCHARGE);
        echo "Initial State : chargingLevel : {$this->battery->chargeLevel}   Total Area:{$floor->totalArea} Area cleaned : {$floor->cleanedArea} m sq\n";
        while ($floor->cleanedArea<$floor->totalArea) {
            if ($this->battery->chargeLevel > 0 && ($this->battery->chargeLevel - $chargeConsumptionForOneUnit)>0) {
                $this->battery->chargeLevel = $this->battery->chargeLevel - $chargeConsumptionForOneUnit;
                $cleanedArea = $floor->cleanApartment();
                $rounded_charge = round($this->battery->chargeLevel, 2);
                echo "chargingLevel : {$rounded_charge}   Area cleaned : {$cleanedArea} m sq\n";
            } else {
                echo "Robot need power. Switching to charging mode...\n";
                $this->battery->chargeBattery();
            }
        }
        return $floor->cleanedArea;
    }


    public function startRobot(array $options)
    {
        try {
            Validator\validate_options($options);
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
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
