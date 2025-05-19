@extends('layout')

@section('konten')

<h1>Daftar jurusan</h1>
<div class="table-responsive">
    <table class="table table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Jurusan_id</th>
            <th>Nama jurusan</th>
            <th>Aksi</th>
        </tr>
        @foreach ($jurusan as $No=> $data)
        <tr class="text-black">
            <td>{{ $No+1}}</td>
            <td>{{ $data->id}}</td>
            <td>{{ $data->nama_jurusan}}</td>
            <td class="d-flex">
                <a href="{{ route('jurusan.edit', $data -> id)}}" class="btn btn-outline-warning">Edit</a>
                <form action="{{ route('jurusan.delete', $data -> id)}}">
                    @csrf
                    <button class="btn btn-outline-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <!-- button tambah jurusan -->
    <form action="{{ route('jurusan.tambah')}}">
        @csrf
        <button class="btn btn-primary">Tambah</button>
    </form>
</div>


@endsection()