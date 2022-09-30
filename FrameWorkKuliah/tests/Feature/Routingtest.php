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
    public function testRouting()
    {
        $this->get('/pzn')->assertSeeText("Hello Programmer Zaman Now");
    }
}
