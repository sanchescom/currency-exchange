<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Responses\Json\InternalServerErrorResponse;
use App\Http\Responses\Json\SuccessResponse;
use App\Http\Responses\Json\ValidationResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Throwable;

final class LoginController extends Controller
{
    public function __invoke(LoginRequest $request): JsonResponse
    {
        try {
            $request->authenticate();

            $token = $request->user()->createToken("AuthToken")->plainTextToken;

            return new SuccessResponse(['access_token' => $token]);
        } catch (ValidationException $exception) {
            return new ValidationResponse($exception->errors());
        } catch (Throwable $exception) {
            return new InternalServerErrorResponse($exception->getMessage());
        }
    }
}
