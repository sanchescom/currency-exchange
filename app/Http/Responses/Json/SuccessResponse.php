<?php

namespace App\Http\Responses\Json;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class SuccessResponse extends JsonResponse
{
    public function __construct(mixed $data = null, $headers = [], $options = 0)
    {
        $data = [
            'status' => 'success',
            'code'   => Response::HTTP_OK,
            'data'   => $data,
        ];

        parent::__construct(data: $data, headers: $headers, options: $options);
    }
}
