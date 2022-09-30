<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Data\Foo;
use App\Data\Bar;
use App\Service\HelloService;
use App\Service\HelloServiceIndonesia;
use Illuminate\Contracts\Support\DeferrableProvider;

class FooBarServiceProvider extends ServiceProvider implements DeferrableProvider
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
    public function provides(): array {
        return [HelloService::class, Foo::class, Bar::class];
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
