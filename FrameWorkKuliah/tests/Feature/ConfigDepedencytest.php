<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Config;
use Tests\TestCase;


class ConfigDepedencytest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testConfigDepedency(){
        $config = $this->app->make("config");
        $firstname1 = $config->get("contoh.author.first");
        $firstname2 = Config::get("contoh.author.first");

        self::assertEquals($firstname1, $firstname2);

        var_dump(Config::all());
    }
}
