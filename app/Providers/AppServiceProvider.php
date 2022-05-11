<?php

namespace App\Providers;

use App\View\Components\home\Portafolio;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Blade;

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
        Blade::component('portafolio', Portafolio::class);

        if (config('app.env') === 'production') {
            URL::forcedScheme('https');
        }
    }
}
