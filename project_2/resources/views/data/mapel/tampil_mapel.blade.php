@extends('layout')

@section('konten')
<h1>Daftar mapel</h1>
<table class="table table-striped table-hover">
    <tr>
        <th>No</th>
        <th>Id_mapel</th>
        <th>Nama_mapel</th>
        <th>Aksi</th>
    </tr>
    @foreach($mapel as $No => $data)
    <tr>
        <td> {{ $No+1}}</td>
        <td> {{ $data->id}}</td>
        <td> {{ $data->nama_mapel}}</td>
        <td>
            <form action="{{ route('mapel.hapus', $data->id)}}">
                <button class="btn btn-danger">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<form action="{{ route('mapel.tambah')}}">
    <button class="btn btn-primary">
        Tambah
    </button>
</form>
@endsection