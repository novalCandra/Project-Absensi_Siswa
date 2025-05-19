@extends('layout')

@section('konten')

<h1>Jadwal guru</h1>
<table class="table table-striped table-hover">
    <tr>
        <th>No</th>
        <th>Guru_id</th>
        <th>Mapel_id</th>
        <th>Kelas_id</th>
        <th>Tanggal</th>
        <th>Waktu mulai</th>
        <th>Waktu selesai</th>
        <th>Aksi</th>
    </tr>
    @foreach($jadwal as $No => $data)
    <tr>
        <td>{{ $No+1}}</td>
        <td>{{ $data->user_id}}</td>
        <td>{{ $data->mapel_id}}</td>
        <td>{{ $data->kelas_id}}</td>
        <td>{{ $data->tanggal}}</td>
        <td>{{ $data->waktu_mulai}}</td>
        <td>{{ $data->waktu_selesai}}</td>
        <td>
            <form action="{{ route('jadwal.hapus', $data->id)}}">
                <button class="btn btn-danger">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<form action="{{ route('jadwal.tambah')}}">
    <button class="btn btn-primary">Tambah</button>
</form>

@endsection