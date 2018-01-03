<?php

namespace LoaderWang\Md5;

use Illuminate\Support\ServiceProvider;
use Loader\Md5\Md5;
class Md5Provider extends ServiceProvider
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
        //每次new实例
        // $this->app->bind('md5',function()
        //{ 
        //  return new Md5(); 
        //});
        //------------------------------------------
        //单例
        $this->app->singleton('md5',function()
        {
           return new Md5(); 
        });
    }
}
