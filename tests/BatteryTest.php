<?php
use PHPUnit\Framework\TestCase;

require('src/Battery.php');
use src\Battery\Battery;

final class BatteryTest extends TestCase
{
    public function testchargeBattery(): void
    {
        $battery = new Battery(0);
        $this->assertEquals(100, $battery->chargeBattery());
    }
}
