<?php

namespace App\Helpers\Math;

final class ExchangeMath
{
    public static function toCoins(string $fiat, string $rate, int $decimals): string
    {
        return Math::roundUp(Math::division($fiat, $rate, $decimals), 10);
    }

    public static function toFiat(string $coins, string $rate, int $decimals): string
    {
        return Math::roundUp(Math::multiply($coins, $rate, $decimals), 2);
    }
}
