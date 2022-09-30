<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FallbackRouteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testFallbackRoute()
    {
        $this->get("/404")->assertSeeText("404");
    }
}
