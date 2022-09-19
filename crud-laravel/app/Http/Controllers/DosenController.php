<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $nama = "Muhammad Basith Algiffari";
        $matkul = ['Web', 'Frame Work', 'Data Science'];

        return view('biodata',['nama' => $nama],['matkul' => $matkul]);
    }
}
