<?php

use src\Robot\Robot as Robot;

require('Robot.php');

/* 
Main module will used to kick start cleaning operation.
*/
$longopts  = array(
    "action:",     // Required value
    "floor:",      // Required value
    "area:",       // Required value
);
$options = getopt(null, $longopts);
$response=Robot::startRobot($options);
echo $response;
