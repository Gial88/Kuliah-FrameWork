@extends('layout')
@section('title')
    Dasboard Utama  
@endsection
@section('judul')
    Dasboard Utama
@endsection
@section('content')
<a href="/menu/tambah" class="btn btn-primary">Tambah Data</a>
<br><br>
<table class="table table-warning table-responsive" style="vertical-align: middle;">
    <tr class="table-primary">
        <th>No</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Deskripsi</th>
        <th>Aksi</th>
    </tr>
    @php $i=1 @endphp
    @foreach($menu as $mnu)
    <tr class="table-light">
        <td>{{$i}}</td>
        <td>{{$mnu->nama_menu}}</td>
        <td>{{$mnu->harga_menu}}</td>
        <td>{{$mnu->deskripsi_menu}}</td>
        <td>
            <a href="/menu/edit/{{ $mnu->id }}" class="btn btn-secondary">Edit</a>
            |
            <a href="/menu/hapus/{{ $mnu->id }}" onclick="return confirm('Apakah Data Akan Dihapus')" class="btn btn-danger">
                Hapus
            </a>
        </td>
    </tr>
    @php $i++ @endphp
    @endforeach
</table>
{{$menu->links()}}
@endsection