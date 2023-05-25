<?php

namespace App\Providers;

use App\Http\Controllers\WeatherController;
use App\Interfaces\WeatherInterface;
use App\Repositories\WeatherRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->when(WeatherController::class)
            ->needs(WeatherInterface::class)
            ->give(function () {
                return new WeatherRepository();
            });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
