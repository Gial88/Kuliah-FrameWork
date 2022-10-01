<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MiddlewareTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testInvalid(){
        $this->get('/middleware/api')->assertStatus(401)->assertSeeText("Access Denied");
    }

    public function testValid(){
        $this->withHeader('X-API-KEY', 'PZN')->get('/middleware/api')
            ->assertStatus(200)->assertSeeText("OK");
    }
}
