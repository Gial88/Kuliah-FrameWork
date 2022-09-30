<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InputAllControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testInputAllController(){
        $this->post('/input/hello/input', 
            ['name' => [
                'first' => 'Eko',
                'last' => 'Khannedy'
                ]
            ])->assertSeeText("name")->assertSeeText("first")->assertSeeText("Eko")
            ->assertSeeText("last")->assertSeeText("Khannedy");
    }
}
