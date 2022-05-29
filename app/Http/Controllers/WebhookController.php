<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebhookController extends Controller
{
    public function handleTelegram(Request $request)
    {
        return 'Hello! You are at telegram webhook route.';
    }
}
