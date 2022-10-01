<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SessionControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCreateSession(){
        $this->get('/session/create')->assertSeeText("OK")
            ->assertSessionHas("userId", "khannedy")
            ->assertSessionHas("isMember", "true");
    }
    
    public function testGetSession(){
        $this->withSession([
            'userId' => 'khannedy',
            'isMember' => 'true'
        ])->get('/session/get')
            ->assertSeeText('khannedy')->assertSeeText('true');
    }
}
