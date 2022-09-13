<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Data\Foo;
use App\Data\Bar;
use App\Service\HelloService;
use App\Service\HelloServiceIndonesia;

class FooBarServiceProviderTest extends TestCase
{
    public function testServiceProvider(){
        $foo1 = $this->app->make(Foo::class);
        $foo2 = $this->app->make(Foo::class);

        self::assertSame($foo1, $foo2);

        $bar1 = $this->app->make(Bar::class);
        $bar2 = $this->app->make(Bar::class);

        self::assertSame($bar1, $bar2);

        self::assertSame($foo1, $bar1->foo);
        self::assertSame($foo2, $bar2->foo);
        self::assertSame($foo2, $bar1->foo);
        self::assertSame($foo1, $bar2->foo);
    }

    public function testPropertySingleton(){
        $HelloService = $this->app->make(HelloServiceIndonesia::class);
        self::assertEquals("Halo Eko", $HelloService->hello("Eko"));
    }
}