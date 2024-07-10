<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property-read string $currency_from
 * @property-read string $currency_to
 * @property-read float $value
 */
class ExchangeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'currency_from' => ['required', 'string'],
            'currency_to' => ['required', 'string'],
            'value' => ['required', 'numeric', 'min:0.1'],
        ];
    }
}
