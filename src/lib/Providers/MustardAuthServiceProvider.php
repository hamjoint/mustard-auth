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
        if (!$this->app->routesAreCached()) {
            require __DIR__.'/../../includes/routes.php';
        }

        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'mustard');

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
