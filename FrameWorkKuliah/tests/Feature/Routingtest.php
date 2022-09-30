<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Routingtest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRoutingRoute()
    {
        $this->get('/pzn')->assertStatus(200)->assertSeeText("Hello Programmer Zaman Now");
    }
}
