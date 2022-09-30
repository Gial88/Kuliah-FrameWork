<?php

namespace App\Http\Controllers;

use App\Service\HelloService;
use App\Service\HelloServiceIndonesia;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    private HelloServiceIndonesia $helloservice;
    public function __construct(HelloServiceIndonesia $helloservice){
        $this->helloservice = $helloservice;
    }

    public function hello(Request $request, string $name): string{
        return $this->helloservice->hello($name);
    }

    public function request(Request $request):string{
        return $request->path() . PHP_EOL .
            $request->url() . PHP_EOL .
            $request->fullUrl() . PHP_EOL .
            $request->method() . PHP_EOL .
            $request->header('Accept') . PHP_EOL;
    }

    

    // public function hello(): string{
    //     return "Hello World";
    // }
}
