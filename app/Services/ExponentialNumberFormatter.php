<?php

namespace App\Services;

use BCMathExtended\BC;

readonly class ExponentialNumberFormatter
{
    /** @var string */
    private const REGEXP = '/^[+-]?[0]*\d*[.]?\d*$/';

    public function __construct(
        private string $number
    ) {
    }

    public function format(): string
    {
        return $this->isExponential() ? BC::convertScientificNotationToString($this->number) : $this->number;
    }

    private function isExponential(): bool
    {
        return preg_match(self::REGEXP, $this->number) !== false;
    }
}
