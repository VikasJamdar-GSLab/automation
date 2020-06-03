<?php
require_once('AbstractFloor.php');

class HardFloor extends Floor
{
    private $timeRequiredToCleanUnitArea;
    public function __construct($totalArea)
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
