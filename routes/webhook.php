<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Webhook Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Webhook routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "webhook" middleware group. Enjoy building your Webhooks!
|
*/

Route::get('telegram', function () {
    return 'Hello! You are at telegram webhook route.';
});
