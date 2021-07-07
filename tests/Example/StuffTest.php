<?php

namespace App\Tests\Example;

use PHPUnit\Framework\TestCase as PHPUnitTestCase;

class StuffTest extends PHPUnitTestCase
{
    public function testStuffIsCool()
    {
        $stuff_is_cool = true;
        $this->assertTrue($stuff_is_cool);
    }
}
