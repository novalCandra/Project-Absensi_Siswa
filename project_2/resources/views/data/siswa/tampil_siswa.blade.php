@extends('layout')

@section('konten')
<h1>Daftar siswa</h1>
<table class="table table-striped table-hover">
    <tr>
        <th>No</th>
        <th>Kelas_id</th>
        <th>Nama siswa</th>
        <th>Aksi</th>
    </tr>
    @foreach($siswa as $No=> $data)
    <tr>
        <td> {{ $No+1}}</td>
        <td> {{ $data->kelas_id}}</td>
        <td> {{ $data->nama_siswa}}</td>
        <td>
            <form action="{{ route('siswa.hapus', $data->id)}}">
                <button class="btn btn-danger">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<form action="{{ route('siswa.tambah') }}">
    <button class="btn btn-primary">Tambah siswa</button>
</form>

@endsection()