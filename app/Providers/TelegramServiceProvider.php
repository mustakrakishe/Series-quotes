<?php

namespace App\Providers;

use App\Facades\Telegram;
use Illuminate\Support\ServiceProvider;
use Telegram\Bot\Api;

class TelegramServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Telegram::class, function ($app) {
            return new Api(env('TELEGRAM_BOT_TOKEN'));
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
