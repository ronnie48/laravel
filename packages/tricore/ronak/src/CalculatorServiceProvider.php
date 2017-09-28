<?php

namespace Tricore\Ronak;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Tricore\Ronak\CalculatorController');
        $this->loadViewsFrom(__DIR__.'/views', 'calculator');
    }
}
