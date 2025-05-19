@extends('layout')

@section('konten')
<h1>Tambah mapel</h1>
<form action="{{ route('mapel.post')}}" method="POST">
    @csrf
    <label>Nama mapel</label>
    <input type="text" name="nama_mapel" id="nama_mapel" class="form-control mb-2" required>

    <button class="btn btn-primary">Simpan</button>
</form>
@endsection