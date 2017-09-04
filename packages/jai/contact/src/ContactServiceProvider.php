<?php

namespace Jai\Contact;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class ContactServiceprovider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    protected $defer = false;
    public function boot()
    {
        $this->loadViewsFrom(realpath(__DIR__.'/../views'), 'contact');
        $this->setupRoutes($this->app->router);
        // this for conig
        $this->publishes([
            __DIR__.'/config/contact.php' => config_path('contact.php'),
        ]);
    }
    

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerContact();
        config([
            'config/contact.php',
        ]);
    }

    public function setupRoutes(Router $router)
    {
        $router->group(['namespace' => 'Jai\Contact\Http\Controllers'], function($router)
        {
            require __DIR__.'/Http/routes.php';
        });
    }

    private function registerContact()
    {
        $this->app->bind('contact',function($app){
            return new Contact($app);
        });
    }
}
