<?php

namespace App\Services;

use App\Collections\RatesCollection;
use App\Dto\RateDto;
use App\Repositories\Http\Interfaces\RatesRepositoryInterface;

readonly class RateService
{
    public function __construct(
        protected RatesRepositoryInterface $repository
    ) {
    }

    public function getFilteredRatesWithCommission(float $commission, array $filters = []): RatesCollection
    {
        $rates = $this->repository->getAll();

        foreach ($filters as $key => $value) {
            if ($value === null) {
                continue;
            }

            $rates = $rates->where($key, $value);
        }

        return $rates->orderByRateDesc()->withCommission($commission);
    }

    public function getSymbolRateWithCommission(string $symbol, float $commission): RateDto
    {
        return $this->getFilteredRatesWithCommission($commission, ['symbol' => $symbol])->firstOrFail();
    }
}
