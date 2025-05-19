@extends('layout')

@section('konten')
<h1>Tambah jurusan</h1>
<form action="{{ route('jurusan.post')}}" method="POST">
    @csrf
    <label for="nama_jurusan">Nama jurusan</label>
    <input type="text" name="nama_jurusan" class="form-control mb-2" required>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection()