<?php

namespace Tests\Feature;

use App\Data\Person;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InstanceTest extends TestCase
{
    public function testInstance(){
        $person = new Person("Muhammad Basith", "Algiffari");
        $this->app->instance(Person::class, $person);

        $person1 = $this->app->make(Person::class);
        $person2 = $this->app->make(Person::class);

        self::assertEquals("Muhammad Basith", $person1->firstname);
        self::assertEquals("Muhammad Basith", $person2->firstname);
        self::assertSame($person, $person1);
        self::assertSame($person1, $person2);
    }
}
