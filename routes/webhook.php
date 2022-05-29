<?php

use App\Facades\Telegram;
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

Route::post('telegram', function () {
    $telegram = new \Telegram\Bot\Api(env('TELEGRAM_BOT_TOKEN'));
    $telegram->addCommands([
        \Telegram\Bot\Commands\HelpCommand::class,
        \App\Services\Telegram\Commands\StartCommand::class,
    ]);
    $telegram->commandsHandler(true);

    // $update = Telegram::commandsHandler(true);
    // return 'ok';
});

Route::post('telegram/send', function () {
    return Telegram::sendMessage([
        'chat_id' => '810370065', 
        'text' => 'Hello World'
      ]);
});

Route::post('telegram/get-updates', function () {
    return Telegram::getUpdates();
    // $telegram = new \Telegram\Bot\Api(env('TELEGRAM_BOT_TOKEN'));
    // return $telegram->getUpdates();
});
