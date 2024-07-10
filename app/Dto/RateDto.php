<?php

namespace App\Dto;

final readonly class RateDto
{
    public function __construct(
        public float $rate,
        public string $symbol,
    ) {
    }
}
