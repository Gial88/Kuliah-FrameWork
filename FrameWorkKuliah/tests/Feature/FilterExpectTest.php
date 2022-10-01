<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FilterExpectTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testFilterExpect(){
        $this->post('/input/filter/expect',[
            "username" => "khannedy",
            "admin" => "true",
            "password" => "rahasia"
        ])->assertSeeText("khannedy")->assertSeeText("rahasia")->assertDontSeeText("admin");
    }
}
