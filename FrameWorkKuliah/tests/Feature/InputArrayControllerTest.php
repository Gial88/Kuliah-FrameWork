<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InputArrayControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testInputArrayController()
    {   
        $this->post('/input/hello/array', 
            ['products' => [
                ['name' => 'Iphone 11'],
                ['name' => 'Samsung Galaxy S20']
            ]
        ])->assertSeeText("Iphone 11")->assertSeeText("Samsung Galaxy S20");
    }
}
