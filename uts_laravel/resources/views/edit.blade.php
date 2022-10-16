@extends('layout')
@section('title')
    Edit Data  
@endsection
@section('judul')
	Edit Data 
@endsection
@section('content')
<div class="mb-3">
	<a href="/menu" class="btn btn-dark"> Kembali</a>
	@foreach($menu as $mnu)
	<form action="/menu/update" method="post" style="margin: 10px;" class="d-grid gap-2">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $mnu->id }}">
		<label class="form-label">Nama Menu</label>
		<input type="text" name="nama" value="{{ $mnu->nama_menu }}" class="form-control">
		<label class="form-label">Harga Menu</label>
		<input type="number" name="harga" value="{{ $mnu->harga_menu }}" class="form-control">
		<label class="form-label">Deskripsi</label>
		<textarea name="deskripsi" rows="3" class="form-control">{{ $mnu->deskripsi_menu }}</textarea>
		<br>
		<input type="submit" value="Ubah Data" class="btn btn-primary btn-lg">
	</form>
	@endforeach
</div>
@endsection