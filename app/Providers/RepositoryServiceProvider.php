<?php

namespace App\Providers;

use App\Repositories\Http\RatesRepository;
use App\Repositories\Http\Interfaces\RatesRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(RatesRepositoryInterface::class, function () {
            return new RatesRepository(config('services.ticker.url'));
        });
    }
}
