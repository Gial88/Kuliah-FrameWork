<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutingConflictTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRoutingConflict(){
        $this->get('/conflict/budi')->assertSeeText("Conflict budi");
        $this->get('/conflict/eko')->assertSeeText("Conflict eko");
    }
}
