<?php

require('Robot.php');

$longopts  = array(
    "action:",     // Required value
    "floor:",      // Required value
    "area:",       // Required value
);
$options = getopt(null, $longopts);
$response=Robot::startRobot($options);
echo $response;
