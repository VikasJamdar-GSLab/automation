<?php
use PHPUnit\Framework\TestCase;

require_once('CarpetFloor.php');
require_once('HardFloor.php');
require_once('Robot.php');

final class RobotTest extends TestCase
{
    protected function setUp()
    {
    }
    public function testcleanCarpetFloor(): void
    {
        $floor_obj = new CarpetFloor(70);
        $robot = new Robot(100);
        $this->assertEquals(70, $robot->cleanFloor($floor_obj));
        $this->assertEquals(70, $floor_obj->totalArea);
        $this->assertEquals(70, $floor_obj->cleanedArea);
    }

    public function testcleanHardFloor(): void
    {
        $floor_obj = new HardFloor(60);
        $robot = new Robot(100);
        $this->assertEquals(60, $robot->cleanFloor($floor_obj));
        $this->assertEquals(60, $floor_obj->totalArea);
        $this->assertEquals(60, $floor_obj->cleanedArea);
    }

    public function testValidateActionRequiredWhileStartRobot(): void
    {
        $options = array(
            'floor'=>'hard',
            'area'=>100
        );
        $this->assertEquals("Please provide action for Robot.", Robot::startRobot($options));
    }

    public function testValidateFloorRequiredWhileStartRobot(): void
    {
        $options = array(
            'action'=>'clean',
            'area'=>100
        );
        $this->assertEquals("Please provide floor(hard/carpet) for Robot.", Robot::startRobot($options));
    }

    public function testValidateAreaRequiredWhileStartRobot(): void
    {
        $options = array(
            'floor'=>'hard',
            'action'=>'clean'
        );
        $this->assertEquals("Please provide area in m**2 for cleaning.", Robot::startRobot($options));
    }

    public function testValidateActionWhileStartRobot(): void
    {
        $options = array(
            'floor'=>'hard',
            'area'=>100,
            'action'=>'sing'
        );
        $this->assertEquals("Only clean action is supported.", Robot::startRobot($options));
    }

    public function testValidateFloorWhileStartRobot(): void
    {
        $options = array(
            'floor'=>'wet',
            'area'=>100,
            'action'=>'clean'
        );
        $this->assertEquals("Only hard and carpet floor is supported.", Robot::startRobot($options));
    }

    public function testValidateAreaWhileStartRobot(): void
    {
        $options = array(
            'floor'=>'hard',
            'area'=>10000,
            'action'=>'clean'
        );
        $this->assertEquals("Minimum area is 10m^2 and maximum is 1000m^2", Robot::startRobot($options));
    }

    public function testValidateStringAreaWhileStartRobot(): void
    {
        $options = array(
            'floor'=>'hard',
            'area'=>'reactangle',
            'action'=>'clean'
        );
        $this->assertEquals("Please provide proper value for area.", Robot::startRobot($options));
    }
}
