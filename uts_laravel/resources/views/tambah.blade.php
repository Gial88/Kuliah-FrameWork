@extends('layout')
@section('title')
    Tambah Data  
@endsection
@section('judul')
	Tambah Data 
@endsection
@section('content')
<div class="mb-3">
	<a href="/menu" class="btn btn-dark"> Kembali</a>
	<form action="/menu/store" method="post" style="margin: 10px;" class="d-grid gap-2">
		{{ csrf_field() }}
		<label class="form-label">Nama Menu</label>
		<input type="text" name="nama" class="form-control">
		<label class="form-label">Harga Menu</label>
		<input type="number" name="harga" class="form-control">
		<label class="form-label">Deskripsi</label>
		<textarea name="deskripsi" rows="3" class="form-control"></textarea>
		<br>
		<input type="submit" value="Simpan Data" class="btn btn-primary btn-lg">
	</form>
</div>
@endsection