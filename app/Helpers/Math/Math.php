<?php

namespace App\Helpers\Math;

use BCMathExtended\BC;

final class Math
{
    public static function multiply(string $num1, string $num2, int $decimals = 0): string
    {
        return bcmul($num1, $num2, $decimals);
    }

    public static function division(string $num1, string $num2, int $decimals = 0): string
    {
        return bcdiv($num1, $num2, $decimals);
    }

    public static function roundUp(string $num, int $decimals = 0): string
    {
        return BC::roundUp($num, $decimals);
    }
}
