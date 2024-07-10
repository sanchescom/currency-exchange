<?php

namespace App\Http\Responses\Json;

use App\Collections\RatesCollection;
use App\Dto\ExchangeDto;
use App\Dto\RateDto;

class ExchangeResponse extends SuccessResponse
{
    public function __construct(ExchangeDto $exchangeDto, $headers = [], $options = 0)
    {
        parent::__construct(data: $exchangeDto->toArray(), headers: $headers, options: $options);
    }

    protected function transform(RatesCollection $collection): RatesCollection
    {
        return $collection->transform(fn(RateDto $rateDto) => $rateDto->rate);
    }
}
