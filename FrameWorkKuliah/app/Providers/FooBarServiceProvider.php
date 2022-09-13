<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Data\Foo;
use App\Data\Bar;
use App\Service\HelloService;
use App\Service\HelloServiceIndonesia;

class FooBarServiceProvider extends ServiceProvider
{
    public array $singleton = [
        HelloService::class => HelloServiceIndonesia::class
    ];



    public function register()
    {
        $this->app->singleton(Foo::class , function () {
            return new Foo();
        });
        $this->app->singleton(Bar::class , function ($app) {
            return new Bar($app->make(Foo::class));
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    //
    }
}
