<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteParameterRegexTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRouteParameterRegex(){
        $this->get('/categories/12345')->assertSeeText("Categories : 12345");
        $this->get('/categories/salah')->assertSeeText("404");
    }
}
