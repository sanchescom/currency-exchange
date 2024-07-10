<?php

namespace App\Helpers\Math;

final class RateMath
{
    public static function applyCommission(float $rate, float $commission): string
    {
        return $rate * (1 + ($commission / 100));
    }
}
