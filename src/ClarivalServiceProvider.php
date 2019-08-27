<?php

namespace BishopJ88\Clarival;

use Illuminate\Support\ServiceProvider;

class ClarivalServiceProvider extends ServiceProvider
{
    
    protected $defer = false;
    
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //$this->publishes([
        //    __DIR__.'/config/clarival.php' => config_path('clarival.php'),
        //]);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {   
        $this->app->bind('BishopJ88\Clarival\Clarival',function($app){
            return new Clarival($app);
        });
    }

}