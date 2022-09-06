<?php

namespace Tests\Feature;

use App\Data\Person;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BindTest extends TestCase
{
    public function testBind(){
        $this->app->bind(Person::class, function($app){
            return new Person("Muhammad Basith","Algiffari");
        });

        $person1 = $this->app->make(Person::class);
        $person2 = $this->app->make(Person::class);

        self::assertEquals("Muhammad Basith", $person1->firstname);
        self::assertEquals("Muhammad Basith", $person2->firstname);
        self::assertNotSame($person1, $person2);
    }
}
