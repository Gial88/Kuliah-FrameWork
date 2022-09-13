<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Data\Foo;
use App\Data\Bar;
use App\Data\Person;

class DepedencyInjTest extends TestCase
{
    public function testDepedencyInjection(){
        $this->app->singleton(Foo::class, function($app){
            return new Foo();
        });
        
        $foo = $this->app->make(Foo::class);
        $bar = $this->app->make(Bar::class);

        self::assertEquals("Foo and Bar", $bar->bar());
        self::assertSame($foo, $bar->foo);
    }
}
