<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Data\Person;

class SingletonTest extends TestCase
{
    public function testSingleton(){
        $this->app->singleton(Person::class, function($app){
            return new Person("Muhammad Basith","Algiffari");
        });

        $person1 = $this->app->make(Person::class);
        $person2 = $this->app->make(Person::class);

        self::assertEquals("Muhammad Basith", $person1->firstname);
        self::assertEquals("Muhammad Basith", $person2->firstname);
        self::assertSame($person1, $person2);
    }
}
