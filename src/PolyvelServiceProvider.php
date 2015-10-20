<?php

namespace Alexisgeneau\Polyvel;

use Illuminate\Support\ServiceProvider;

class PolyvelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */

    protected $defer = false;
    
    public function boot()
    {
        // Get namespace
        $nameSpace = $this->app->getNamespace();

        //Include Root
        include __DIR__.'/routes.php';
 
        // Move files
        $this->publishes([
            __DIR__.'/polyvel/views' => base_path('resources/views'),
            __DIR__.'/polyvel/public/elements/my-greeting' => base_path('public/elements/my-greeting'),
            __DIR__.'/polyvel/public/elements/my-list' => base_path('public/elements/my-list'),
            __DIR__.'/polyvel/public/elements' => base_path('public/elements'),
            __DIR__.'/polyvel/public/scripts' => base_path('public/scripts'),
            __DIR__.'/polyvel/public/styles' => base_path('public/styles'),
            __DIR__.'/polyvel/public/test' => base_path('public/test'),
            __DIR__.'/polyvel/public' => base_path('public'),
            __DIR__.'/polyvel' => base_path('/'),

        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
