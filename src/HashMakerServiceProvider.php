<?php
namespace HashMaker;

use Illuminate\Support\ServiceProvider;


class HashMakerServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
    /**
     * Bootstrap the application events.
     *
     * @return void
     */

    protected $policies = [];

    public function boot()
    {

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

        $this->app->singleton('HashMaker',function($app){
            return new \HashMaker\FNV();
        });


    }
}
