<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use classmap\Calculation;

final class CalculationTest extends TestCase
{
    public function testRomanConverter(): void
    {
    $op = new Calculation;
    $this->assertEquals('I', $op->romanConverter(1));
    $this->assertEquals('VIII', $op->romanConverter(8));
    $this->assertEquals('XIV', $op->romanConverter(14));
    $this->assertEquals('XXXXVII', $op->romanConverter(47));
    $this->assertEquals('MMMMCMXVII', $op->romanConverter(4917));

    }
}