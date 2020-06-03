<?php
require_once('AbstractFloor.php');

class CarpetFloor extends Floor
{
    private $timeRequiredToCleanUnitArea;

    public function __construct($totalArea)
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
