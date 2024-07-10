<?php

namespace App\Dto;

use Illuminate\Contracts\Support\Arrayable;

final readonly class ExchangeDto implements Arrayable
{
    public function __construct(
        public string $currencyFrom,
        public string $currencyTo,
        public string $amountValue,
        public string $rateValue,
        public string $exchangeResult,
    ) {
    }

    public function toArray(): array
    {
        return [
            'currency_from'   => $this->currencyFrom,
            'currency_to'     => $this->currencyTo,
            'value'           => $this->amountValue,
            'converted_value' => $this->exchangeResult,
            'rate'            => $this->rateValue,
        ];
    }
}
