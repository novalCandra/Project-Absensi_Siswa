@extends('layout')

@section('konten')
<h1>Tambah jadwal</h1>
<form action="{{ route('jadwal.post')}}" method="POST">
    @csrf
    <label>Guru</label>
    <select name="user_id" id="user_id" class="form-control mb-2">
        <option> -- Pilih guru -- </option>
        @foreach($guru as $g)
        <option value="{{ $g->id}}">{{ $g->name}}</option>
        @endforeach
    </select>

    <label>Mapel</label>
    <select name="mapel_id" id="mapel_id" class="form-control mb-2">
        <option> -- Pilih Mapel -- </option>
        @foreach($mapel as $m)
        <option value="{{ $m->id}}">{{ $m->nama_mapel}}</option>
        @endforeach
    </select>

    <label>Kelas</label>
    <select name="kelas_id" id="kelas_id" class="form-control mb-2">
        <option> -- Pilih kelas -- </option>
        @foreach($kelas as $k)
        <option value="{{ $k->id}}">{{ $k->nama_kelas}}</option>
        @endforeach
    </select>

    <label>Tanggal</label>
    <input type="date" name="tanggal" id="tanggal" class="form-control mb-2" required>

    <div class="d-flex">
        <select name="waktu_mulai" id="waktu_mulai" class="form-control mb-2">
            <option> -- Pilih Waktu Mulai -- </option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>

        <select name="waktu_selesai" id="waktu_selesai" class="form-control mb-2">
            <option> -- Pilih Waktu Selesai -- </option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
    </div>

    <button class="btn btn-primary">Simpan</button>
</form>

@endsection