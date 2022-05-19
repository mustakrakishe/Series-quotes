<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;
use Throwable;

class Handler extends ExceptionHandler
{
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    protected function shouldReturnJson($request, Throwable $e)
    {
        return true;
    }

    protected function convertExceptionToArray(Throwable $e)
    {
        $array = parent::convertExceptionToArray($e);
        $array['success'] = false;
        return $array;
    }

    protected function invalidJson($request, ValidationException $exception)
    {
        return response()->json([
            'message' => $exception->getMessage(),
            'errors' => $exception->errors(),
            'success' => false,
        ], $exception->status);
    }
}
