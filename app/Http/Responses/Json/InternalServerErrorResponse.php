<?php

namespace App\Http\Responses\Json;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class InternalServerErrorResponse extends JsonResponse
{
    public function __construct($message = null, $headers = [], $options = 0)
    {
        $data = [
            'status'  => 'error',
            'code'    => Response::HTTP_INTERNAL_SERVER_ERROR,
            'message' => $message,
        ];

        parent::__construct($data, Response::HTTP_INTERNAL_SERVER_ERROR, $headers, $options);
    }
}
