<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Crypt;
use Tests\TestCase;

class EncryptDecryptTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testEncryptDecrypt(){
        $encrypt = Crypt::encrypt('Eko Kurniawan');
        $decrypt = Crypt::decrypt($encrypt);

        self::assertEquals('Eko Kurniawan', $decrypt);
    }
}
