<?php

namespace App\Http\Responses\Json;

use App\Collections\RatesCollection;
use App\Dto\RateDto;

class RatesResponse extends SuccessResponse
{
    public function __construct(RatesCollection $collection, $headers = [], $options = 0)
    {
        parent::__construct(data: $this->transform($collection), headers: $headers, options: $options);
    }

    protected function transform(RatesCollection $collection): RatesCollection
    {
        return $collection->transform(fn(RateDto $rateDto) => $rateDto->rate);
    }
}
