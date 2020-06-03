<?php
use PHPUnit\Framework\TestCase;

require('Battery.php');

final class BatteryTest extends TestCase
{
    public function testchargeBattery(): void
    {
        $battery = new Battery(0);
        $this->assertEquals(100, $battery->chargeBattery());
    }
}
