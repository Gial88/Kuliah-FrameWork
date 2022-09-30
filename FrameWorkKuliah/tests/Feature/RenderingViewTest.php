<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RenderingViewTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRenderingView(){
        $this->get('/hello')->assertSeeText("Hello Gial");
        $this->get('/hello-again')->assertSeeText("Hello Gial");

    }
}
