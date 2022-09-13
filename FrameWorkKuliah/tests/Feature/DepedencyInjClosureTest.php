<?php

namespace Tests\Feature;

use App\Data\Bar;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Data\Foo;

class DepedencyInjClosureTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testDependencyInjection2(){
        $this->app->singleton(Foo::class, function ($app){
            return new Foo();
        });

        $this->app->singleton(Bar::class, function ($app){
            $foo = $app->make(Foo::class);
            return new Bar($foo);
        });

        $foo = $this->app->make(Foo::class);
        $bar1 = $this->app->make(Bar::class);
        $bar2 = $this->app->make(Bar::class);

        self::assertEquals("Foo and Bar", $bar1->bar());
        self::assertSame($foo, $bar1->foo);
        self::assertSame($bar1, $bar2);
    }
}
