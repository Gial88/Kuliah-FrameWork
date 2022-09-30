<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRouteController(){
        $this->get('/controller/hello')->assertSeeText("Hello World");
    }

    public function testHelloRouteController(){
        $this->get('/controller/hello/Gial')->assertSeeText("Halo Gial");
    }
}
