<?php
namespace src\HardFloor;

require_once('Floor.php');

use src\Floor\Floor;

class HardFloor extends Floor
{
    private $timeRequiredToCleanUnitArea;
    public function __construct(int $totalArea)
    {
        $this->timeRequiredToCleanUnitArea = 1;
        parent::__construct($totalArea);
    }

    //Get the time required to clean 1 m**2 hard floor
    public function getTimeRequiredToCleanUnitArea()
    {
        return $this->timeRequiredToCleanUnitArea;
    }
}
