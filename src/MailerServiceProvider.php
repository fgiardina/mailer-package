<?php

namespace Fgiardina\Mailer;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Mail;

class MailerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views');

        $this->mergeConfigFrom(
            __DIR__ . '/config/Mailer.php',
            'Mailer'
        );
        $this->publishes([
            __DIR__ . '/config/Mailer.php' => config_path('Mailer.php'),
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}