<?php

namespace App\Http\Responses\Json;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class NotFoundResponse extends JsonResponse
{
    public function __construct($message = null, $headers = [], $options = 0)
    {
        $data = [
            'status'  => 'error',
            'code'    => Response::HTTP_NOT_FOUND,
            'message' => $message,
        ];

        parent::__construct($data, Response::HTTP_NOT_FOUND, $headers, $options);
    }
}
