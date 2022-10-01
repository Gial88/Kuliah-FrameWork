<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FilterOnlyTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testFilterOnly(){
        $this->post('/input/filter/only',[
            "name" => [
                "first" => "Eko",
                "middle" => "Kurniawan",
                "last" => "Khannedy"
            ]
        ])->assertSeeText("Eko")->assertSeeText("Khannedy")->assertDontSeeText("Kurniawan");
    }
}
