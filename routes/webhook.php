<?php

use Illuminate\Support\Facades\Route;
use Telegram\Bot\Laravel\Facades\Telegram;

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

Route::post('telegram', function () {
    $update = Telegram::commandsHandler(true);
    return 'ok';
});

Route::post('telegram/send', function () {
    return Telegram::sendMessage([
        'chat_id' => '810370065', 
        'text' => 'Hello World'
      ]);
});
