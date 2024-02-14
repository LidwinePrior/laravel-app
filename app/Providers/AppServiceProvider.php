<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
    public function boot(): void
    {
        //a mettre pour éviter une erreur au moment de la migration car le considère que la clé est trop longue. Il fau le limiter a 191 (uniqument sur windows)
        Schema::defaultStringLength(191);
    }
}
