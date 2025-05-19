@extends('layout')

@section('konten')

<h1>Tambah siswa</h1>
<form action="{{ route('siswa.post')}}" method="POST">
    @csrf
    <label>Kelas</label>
    <select name="kelas_id" id="kelas_id" class="form-control mb-2">
        <option>-- Pilih kelas --</option>
        @foreach($kelas as $k)
        <option value="{{ $k->id}}"> {{ $k->nama_kelas}}</option>
        @endforeach
    </select>

    <label>Nama siswa</label>
    <input type="text" class="form-control mb-3" name="nama_siswa" id="nama_siswa" required>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection