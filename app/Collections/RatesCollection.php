<?php

namespace App\Collections;

use App\Dto\RateDto;
use App\Helpers\Math\RateMath;
use Illuminate\Support\Collection;

class RatesCollection extends Collection
{
    public function withCommission(float $commission): self
    {
        return $this->transform(function (RateDto $rateDto) use ($commission) {
            return new RateDto(RateMath::applyCommission($rateDto->rate, $commission), $rateDto->symbol);
        });
    }

    public function orderByRateDesc(): self
    {
        return $this->sortByDesc('rate');
    }
}
