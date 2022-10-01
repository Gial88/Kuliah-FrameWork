<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class InputController extends Controller
{
    public function hello(Request $request): string{
        $name = $request->input('name');
        return "Hello ".$name;
    }

    public function hellofirst(Request $request):string{
        $firstname = $request->input('name.first');
        return "Hello ".$firstname;
    }

    public function helloInput(Request $request): string{
        $input = $request->input();
        return json_encode($input);
    }

    public function arrayInput(Request $request): string{
        $names = $request->input('products.*.name');
        return json_encode($names);
    }

    public function inputType(Request $request): string{
        $name = $request->input("name");
        $married = $request->boolean("married");
        $birthdate = $request->date('birth_date', 'Y-m-d');

        return json_encode([
            "name" => $name,
            "married" => $married,
            "birth_date" =>$birthdate->format('Y-m-d')
        ]);
    }

    public function filterOnly(Request $request): string{
        $name = $request->only(['name.first', 'name.last']);
        return json_encode($name);
    }

    public function filterExpect(Request $request): string{
        $user = $request->expect(['admin']);
        return json_encode($user);
    }

    public function filterMerge(Request $request):string {
        $request->merge(['admin' => false]);
        $user = $request->input();
        return json_encode($user);
    }

    public function form(): Response{
        return response()->view('form');
    }

    public function submitForm(Request $request): Response{
        $nama = $request->input('name');
        return response()->view('Hello', ['name' => $nama]);
    }
}
