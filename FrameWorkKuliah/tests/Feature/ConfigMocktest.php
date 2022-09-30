<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Config;
use Tests\TestCase;

class ConfigMocktest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testConfigMock(){
        Config::shouldReceive('get')
            ->with('contoh.author.username')
            ->andReturn("Gial Keren");

        $firstname = Config::get("contoh.author.username");

        self::assertEquals("Gial Keren", $firstname);
    }
}
