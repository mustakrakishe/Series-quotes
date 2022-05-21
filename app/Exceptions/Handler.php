<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    protected function shouldReturnJson($request, Throwable $e)
    {
        return $request->is('api/*');
    }

    public function render($request, Throwable $e)
    {
        $response = parent::render($request, $e);

        if ($this->shouldReturnJson($request, $e)) {
            $content = json_decode($response->getContent());
            $content->success = false;

            $response->setContent(json_encode($content));
        }

        return $response;
    }
}
