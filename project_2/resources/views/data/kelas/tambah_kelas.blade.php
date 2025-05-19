@extends('layout')

@section('konten')
<h1>Tambah kelas</h1>
<form action="{{ route('kelas.post')}}" method="POST">
    @csrf
    <label>Jurusan</label>
    <select name="jurusan" id="jurusan" class="form-control mb-3" required>
        <option value="">-- Pilih Jurusan -- </option>
        @foreach($jurusan as $j)
        <option value="{{ $j->id}}">{{ $j->nama_jurusan}}</option>
        @endforeach
    </select>
    
    <label>Jenjang</label>
    <select name="jenjang" id="jenjang" class="form-control mb-3" required>
        <option value="">-- Pilih Jenjang --</option>
        @foreach($jenjang as $j)
        <option value="{{ $j->id}}">{{ $j->nama_jenjang}}</option>
        @endforeach
    </select>

    <label>Nama kelas</label>
    <input type="text" name="nama_kelas" class="form-control mb-3" require>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection()