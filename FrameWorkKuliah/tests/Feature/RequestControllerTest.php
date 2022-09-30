<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RequestControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRequestController(){
        $this->get('/controller/hello/request', ['Accept' => 'plain/text'])
        ->assertSeeText('/controller/hello/request')
        ->assertSeeText('https://localhost/controller/hello/request')
        ->assertSeeText('GET')
        ->assertSeeText('plain/text');
    }
}
