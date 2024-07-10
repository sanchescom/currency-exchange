<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExchangeRequest;
use App\Http\Responses\Json\ExchangeResponse;
use App\Http\Responses\Json\InternalServerErrorResponse;
use App\Http\Responses\Json\NotFoundResponse;
use App\Services\Exchanger;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\ItemNotFoundException;
use Throwable;

final class ExchangeController extends Controller
{
    public function __invoke(ExchangeRequest $request, Exchanger $exchanger): JsonResponse
    {
        try {
            $exchangedResult = $exchanger->exchangeWithCommission(
                $request->validated('currency_from'),
                $request->validated('currency_to'),
                $request->validated('value'),
                config('app.commission')
            );

            return new ExchangeResponse($exchangedResult);
        } catch (ItemNotFoundException) {
            return new NotFoundResponse('Currency rate not found');
        } catch (Throwable $exception) {
            return new InternalServerErrorResponse($exception->getMessage());
        }
    }
}
