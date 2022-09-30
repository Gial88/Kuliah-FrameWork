<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NamedRouteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testNamedRoute(){
        $this->get('/produk/12345')->assertSeeText('products/12345');
        $this->get('/produk-redirect/12345')->assertSeeText('products/12345');
    }
}
