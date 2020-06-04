<?php

use src\Robot\Robot as Robot;

require('Robot.php');

$longopts  = array(
    "action:",     // Required value
    "floor:",      // Required value
    "area:",       // Required value
);
$options = getopt(null, $longopts);
$response=Robot::startRobot($options);
echo $response;
