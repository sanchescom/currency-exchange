<?php

namespace App\Http\Controllers;

use App\Http\Requests\RatesRequest;
use App\Http\Responses\Json\InternalServerErrorResponse;
use App\Http\Responses\Json\RatesResponse;
use App\Services\RateService;
use Illuminate\Http\JsonResponse;
use Throwable;

final class RatesController extends Controller
{
    public function __invoke(RatesRequest $request, RateService $rateService): JsonResponse
    {
        try {
            $currency   = $request->validated('currency');
            $commission = config('app.commission');

            return new RatesResponse(
                $rateService->getFilteredRatesWithCommission($commission, ['symbol' => $currency])
            );
        } catch (Throwable $exception) {
            return new InternalServerErrorResponse($exception->getMessage());
        }
    }
}
