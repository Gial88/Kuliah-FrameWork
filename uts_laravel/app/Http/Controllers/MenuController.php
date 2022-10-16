<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function index()
    {
            $menu = DB::table("menus")->paginate(4);
            return view('index',['menu' => $menu]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		DB::table('menus')->insert([
			'nama_menu' => $request->nama,
			'harga_menu' => $request->harga,
			'deskripsi_menu' => $request->deskripsi
		]);
		return redirect('/menu');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$menu = DB::table('menus')->where('id',$id)->get();
		return view('edit',['menu' => $menu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        DB::table('menus')->where('id',$request->id)->update([
			'nama_menu' => $request->nama,
			'harga_menu' => $request->harga,
			'deskripsi_menu' => $request->deskripsi
		]);
		return redirect('/menu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
		DB::table('menus')->where('id',$id)->delete();
		return redirect('/menu');
    }
}
