<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */

    public function boot()
{
    if(empty(config('app.key'))) {
        throw new \RuntimeException('Chave de aplicação não configurada');
    }
}
}
