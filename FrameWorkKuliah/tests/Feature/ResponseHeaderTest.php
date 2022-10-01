<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ResponseHeaderTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testResponseHeader(){
        $this->get('response/header')->assertStatus(200)->assertSeeText('Eko')
            ->assertSeeText('Khannedy')->assertHeader('Content-type','application/json')
            ->assertHeader('Author','Programmer Zaman Now')
            ->assertHeader('App', 'Belajar Laravel');
    }
}
