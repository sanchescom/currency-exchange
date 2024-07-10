<?php

namespace App\Repositories\Http;

use App\Collections\RatesCollection;
use App\Dto\RateDto;
use App\Repositories\Http\Interfaces\RatesRepositoryInterface;
use Illuminate\Support\Facades\Http;

class RatesRepository implements RatesRepositoryInterface
{
    public function __construct(
        protected string $url
    ) {
    }

    public function getAll(): RatesCollection
    {
        return (new RatesCollection($this->getJson()))
            ->transform(fn(array $rate) => new RateDto($rate['last'], $rate['symbol']));
    }

    protected function getJson(): array
    {
        return Http::get($this->url)->json();
    }
}
