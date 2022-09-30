<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteParameterTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRouteParameter(){
        $this->get('/products/1')->assertSeeText("Products : 1");
        $this->get('/products/1/items/xxx')->assertSeeText("Products : 1, Items : xxx");
    }
}
