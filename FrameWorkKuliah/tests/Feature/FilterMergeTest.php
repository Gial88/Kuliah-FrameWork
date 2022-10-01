<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FilterMergeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testFilterMerge(){
        $this->post('/input/filter/merge',[
            "username" => "khannedy",
            "admin" => "true",
            "password" => "rahasia"
        ])->assertSeeText("khannedy")->assertSeeText("rahasia")
        ->assertSeeText("admin")->assertSeeText("false");
    }
}
