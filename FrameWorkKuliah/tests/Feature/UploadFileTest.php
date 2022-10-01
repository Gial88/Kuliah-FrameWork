<?php

namespace Tests\Feature;

use Illuminate\Http\UploadedFile;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UploadFileTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUploadFile(){
        $image = UploadedFile::fake()->image("khannedy.png");

        $this->post('/file/upload', [
            'picture' => $image
        ])->assertSeeText("OK : khannedy.png");
    }
}
