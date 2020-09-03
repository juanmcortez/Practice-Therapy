<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // https://laravel.com/docs/7.x/migrations#creating-indexes
        Schema::defaultStringLength(191);
        // https://laravel.com/docs/7.x/migrations#creating-indexes
    }
}
