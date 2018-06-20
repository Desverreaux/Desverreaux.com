<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(255);
        $this->app->singleton('AssetHandler', \App\Handlers\AssetHandler::class);
        $this->app->singleton('ImageHandler', \App\Handlers\ImageHandler::class);
        $this->app->singleton('Helpers', \App\Helpers\HelperManager::class );
        
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
