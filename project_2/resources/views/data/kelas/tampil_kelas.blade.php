@extends('layout')

@section('konten')
<h1>Daftar kelas</h1>
<table class="table table-striped table-hover">
    <tr>
        <th>No</th>
        <th>Jurusan_id</th>
        <th>Jenjang_id</th>
        <th>Nama kelas</th>
        <th>Aksi</th>
    </tr>
    @foreach($kelas as $No=> $data)
    <tr>
        <td>{{ $No+1}}</td>
        <td>{{ $data->jurusan_id}}</td>
        <td>{{ $data->jenjang_id}}</td>
        <td>{{ $data->nama_kelas}}</td>
        <td>
            <div class="d-flex">
                <a href="{{ route('kelas.edit', $data -> id)}}" class="btn btn-outline-warning">Edit</a>
                <form action="{{ route('kelas.delete', $data -> id)}}">
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </td>
    </tr>
    @endforeach
</table>
<form action="{{ route('kelas.tambah')}}">
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>

@endsection()