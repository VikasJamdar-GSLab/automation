<?php
namespace src\Validator;

/* 
validate options will validate command line arguments for action, floor and area and will raise
apropriate exceptions.
*/
function validate_options(array $commandLineOptions)
{
    if (!array_key_exists('action', $commandLineOptions)) {
        throw new \Exception("Please provide action for Robot.");
    }
    if (!array_key_exists('floor', $commandLineOptions)) {
        throw new \Exception("Please provide floor(hard/carpet) for Robot.");
    }
    if (!array_key_exists('area', $commandLineOptions)) {
        throw new \Exception("Please provide area in m**2 for cleaning.");
    }
    if (strtoupper($commandLineOptions['action']) != "CLEAN") {
        throw new \Exception("Only clean action is supported.");
    }
    if (!in_array(strtoupper($commandLineOptions['floor']), array('HARD','CARPET'))) {
        throw new \Exception("Only hard and carpet floor is supported.");
    }
    if (!is_numeric($commandLineOptions['area'])) {
        throw new \Exception("Please provide proper value for area.");
    }
    if ($commandLineOptions['area']<10 or $commandLineOptions['area']>1000) {
        throw new \Exception("Minimum area is 10m^2 and maximum is 1000m^2");
    }
    return;
}
