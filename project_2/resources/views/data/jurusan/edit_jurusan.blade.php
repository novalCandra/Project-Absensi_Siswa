@extends('layout')

@section('konten')

<h1>Edit Record</h1>
<form action="{{ route('jurusan.update', $jurusan->id)}}" method="POST">
    @csrf
    <label for="nama-jurusan">Nama jurusan</label>
    <input type="text" name="nama_jurusan" value="{{ $jurusan->nama_jurusan}}" class="form-control mb-2">

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection()