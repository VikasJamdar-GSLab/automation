<?php
namespace src\CarpetFloor;

require_once('Floor.php');
require_once('Apartment.php');

use src\Floor\Floor;
use src\Apartment\Apartment;

/* 
Carpet floor require 2 seconds to clean unit area.
*/
final class CarpetFloor extends Floor implements Apartment
{
    const TIME_TO_CLEAN_UNIT_AREA = 2;

    public function __construct(int $totalArea)
    {
        parent::__construct($totalArea);
    }

    public function cleanApartment()
    {
        $this->cleanedArea = $this->cleanedArea + 1;
        return $this->cleanedArea;
    }
}
