<?php

namespace App\Http\Responses\Json;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ValidationResponse extends JsonResponse
{
    public function __construct($errors = null, $headers = [], $options = 0)
    {
        $data = [
            'status'  => 'error',
            'code'    => Response::HTTP_UNPROCESSABLE_ENTITY,
            'errors'  => $errors,
        ];

        parent::__construct($data, Response::HTTP_UNPROCESSABLE_ENTITY, $headers, $options);
    }
}
