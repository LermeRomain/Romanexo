<?php declare(strict_types=1);

class LeapYear
{
    public static function isDecimalToRoman(int $nombre): string
    {
        if ($nombre == 1) {
            return "I";
        } else if ($nombre == 2) {
            return "II";
        } else if ($nombre == 3) {
            return "III";
        } else if ($nombre == 10) {
            return "X";
        } else if ($nombre == 10) {
            return "X";
        } else if ($nombre == 50) {
            return "L";
        } else if ($nombre == 100) {
            return "C";
        } else if ($nombre == 500) {
            return "D";
        } else if ($nombre == 1000) {
            return "M";
        }
    }
}
