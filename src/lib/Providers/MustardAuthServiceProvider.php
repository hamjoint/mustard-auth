<?php

namespace Hamjoint\Mustard\Auth\Providers;

use Illuminate\Support\ServiceProvider;

class MustardAuthServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Include routes
        if (!$this->app->routesAreCached()) {
            require __DIR__ . '/../../includes/routes.php';
        }

        // Load views
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'mustard');

        // Register middleware
        $this->app->router->middleware('auth', \Hamjoint\Mustard\Auth\Http\Middleware\Authenticate::class);
        $this->app->router->middleware('guest', \Hamjoint\Mustard\Auth\Http\Middleware\RedirectIfAuthenticated::class);
    }

    /**
     * Register any services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
