@extends('layout')

@section('konten')
<h1>Edit kelas</h1>
<form action="{{ route('kelas.update', $kelas->id)}}" method="POST">
    @csrf

    <label>Jurusan_id</label>
    <select name="jurusan_id" id="jurusan" class="form-control mb-2">
        <option value="{{ old('jurusan_id', $kelas->jurusan_id) }}"></option>
        @foreach($jurusan as $j)
        <option value="{{ $j->id }}"
            {{ $kelas->jurusan_id == $j->id ? 'selected' : '' }}>
            {{ $j->nama_jurusan }}
        </option>
        @endforeach
    </select>

    <label>Jenjang</label>
    <select name="jenjang_id" id="jenjang" class="form-control mb-2">
        <option value="{{ old('jenjang_id', $kelas->jenjang_id) }}"></option>
        @foreach($jenjang as $j)
        <option value="{{ $j->id }}"
            {{ $kelas->jenjang_id == $j->id ? 'selected' : '' }}>
            {{ $j->nama_jenjang }}
        </option>
        @endforeach
    </select>


    <label>Nama kelas</label>
    <input type="text" class="form-control mb-2" id="nama_kelas" name="nama_kelas" value="{{ old('nama_kelas', $kelas->nama_kelas)}}" required>

    <button type="submit" class="btn btn-outline-primary">Simpan</button>
</form>

@endsection