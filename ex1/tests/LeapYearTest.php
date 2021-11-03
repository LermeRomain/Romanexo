<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class LeapYearTest extends TestCase
{
    public function test1(): void
    {
        $this->assertEquals("I", LeapYear::isDecimalToRoman(1));
    }

    public function test2(): void
    {
        $this->assertEquals("II", LeapYear::isDecimalToRoman(2));
    }

    public function test3(): void
    {
        $this->assertEquals("III", LeapYear::isDecimalToRoman(3));
    }

    public function test10(): void
    {
        $this->assertEquals("X", LeapYear::isDecimalToRoman(10));
    }

    public function test50(): void
    {
        $this->assertEquals("L", LeapYear::isDecimalToRoman(50));
    }

    public function test100(): void
    {
        $this->assertEquals("C", LeapYear::isDecimalToRoman(100));
    }

    public function test500(): void
    {
        $this->assertEquals("D", LeapYear::isDecimalToRoman(500));
    }

    public function test1000(): void
    {
        $this->assertEquals("M", LeapYear::isDecimalToRoman(1000));
    }
}
