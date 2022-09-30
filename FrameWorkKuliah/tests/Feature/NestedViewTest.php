<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NestedViewTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testNestedView(){
        $this->get('/hello-world')->assertSeeText("World Gial");
    }
}
