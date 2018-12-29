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
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'Mailer');

        $this->mergeConfigFrom(
            __DIR__ . '/config/Mailer.php',
            'Mailer'
        );
        $this->publishes([
            __DIR__ . '/config/Mailer.php' => config_path('Mailer.php'),
            __DIR__ . '/resources/views' => resource_path('views/vendor/mailer'),
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