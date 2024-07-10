<?php

namespace App\Services;

use App\Dto\ExchangeDto;
use App\Helpers\Math\ExchangeMath;

readonly class Exchanger
{
    public function __construct(
        protected RateService $rateService,
    ) {
    }

    public function exchangeWithCommission(string $from, string $to, float $value, float $commission): ExchangeDto
    {
        $rate = $this->rateService->getSymbolRateWithCommission($this->getRateSymbol($from, $to), $commission);

        $amountValue = (new ExponentialNumberFormatter($value))->format();
        $rateValue = (new ExponentialNumberFormatter($rate->rate))->format();

        if ($this->isCoinExchange($from)) {
            $exchangeResult = ExchangeMath::toFiat($amountValue, $rateValue, 10);
        } else {
            $exchangeResult = ExchangeMath::toCoins($amountValue, $rateValue, 10);
        }

        return new ExchangeDto(
            $from,
            $to,
            $amountValue,
            $rateValue,
            $exchangeResult
        );
    }

    private function getRateSymbol(string $from, string $to): string
    {
        return $this->isCoinExchange($from) ? $to : $from;
    }

    private function isCoinExchange(string $symbol): bool
    {
        return $symbol === 'BTC';
    }
}
