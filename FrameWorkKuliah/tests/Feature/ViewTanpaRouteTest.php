<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewTanpaRouteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testViewTanpaRoute(){
        $this->view('hello', ['name' => 'Gial'])->assertSeeText("Hello Gial");
    }
}
