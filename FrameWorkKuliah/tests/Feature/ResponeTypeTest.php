<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ResponeTypeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testView(){
        $this->get('/response/type/view')->assertSeeText("Hello Eko");
    }
    public function testJson(){
        $this->get('/response/type/json')->assertJson(['firstname'=>"Eko", 'lastname' => "Khannedy"]);
    }
    public function testFile(){
        $this->get('/response/type/file')->assertHeader("Content-Type", "image/png");
    }
    public function testDownload(){
        $this->get('/response/type/dowload')->assertDownload("khannedy.png");
    }
}
