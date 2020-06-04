<?php
namespace src\CarpetFloor;

require_once('Floor.php');

use src\Floor\Floor as Floor;

class CarpetFloor extends Floor
{
    private $timeRequiredToCleanUnitArea;

    public function __construct(int $totalArea)
    {
        parent::__construct($totalArea);
        $this->timeRequiredToCleanUnitArea = 2;
    }

    //Get the time required to clean 1 m**2 hard floor
    public function getTimeRequiredToCleanUnitArea()
    {
        return $this->timeRequiredToCleanUnitArea;
    }
}
