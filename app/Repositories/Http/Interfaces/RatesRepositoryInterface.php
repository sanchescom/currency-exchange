<?php

namespace App\Repositories\Http\Interfaces;

use App\Collections\RatesCollection;

interface RatesRepositoryInterface
{
    public function getAll(): RatesCollection;
}
