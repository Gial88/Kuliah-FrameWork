<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class FileSystemStorageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testFileSystemStorage(){
        $filesystem = Storage::disk('local');
        $filesystem->put("file.txt","Put Your Content Here");

        self::assertEquals("Put Your Content Here", $filesystem->get("file.txt"));
    }
}
