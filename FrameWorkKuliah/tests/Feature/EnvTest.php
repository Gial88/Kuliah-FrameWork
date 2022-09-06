<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\App;

class EnvTest extends TestCase
{
    public function testEnv(){
        if(App::environment("testing")){
            echo"login in testing env". PHP_EOL;
            self::assertTrue(true);
        }
    }
}
