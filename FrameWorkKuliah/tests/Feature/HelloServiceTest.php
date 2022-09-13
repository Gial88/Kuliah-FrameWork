<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Service\HelloServiceIndonesia;
class HelloServiceTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testHelloService(){
        $this->app->singleton(HelloService::class, HelloServiceIndonesia::class);

        $helloService = $this->app->make(HelloService::class);
        self::assertEquals("Halo Anton", $helloService->hello("Anton"));
    }
}
