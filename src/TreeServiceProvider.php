<?php

namespace Zaoma\Tree;

use Illuminate\Support\ServiceProvider;

class TreeServiceProvider extends ServiceProvider
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
        $this->app['tree'] = $this->app->share(function ($app) {
            return new Tree();
       });
        $this->app->alias('tree', ' Zaoma\Tree\Tree');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['tree'];
    }
}
