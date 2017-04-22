<?php

namespace SM\Akakce;

use Illuminate\Support\ServiceProvider;

class AkakceServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('akakce', function(){
          return new Akakce();
        });
    }
}