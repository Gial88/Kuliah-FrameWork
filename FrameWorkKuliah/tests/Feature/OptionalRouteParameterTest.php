<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OptionalRouteParameterTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testOptionalRouteParameter()
    {
        $this->get('/users/12345')->assertSeeText("Users : 12345");
        $this->get('/users/')->assertSeeText("Users : 404");
    }
}
