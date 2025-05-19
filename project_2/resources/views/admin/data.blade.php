@extends('layout')

@section('konten')
<link rel="stylesheet" href="{{ asset('css/HalamanDataAdmin.css')}}">
<div class="menu-container">
    <a href="{{ route('jurusan') }}" class="menu-card">
        <span>Jurusan</span>
    </a>
    <a href="{{ route('kelas') }}" class="menu-card">
        <span>Kelas</span>
    </a>
    <a href="{{ route('siswa') }}" class="menu-card">
        <span>Siswa</span>
    </a>
    <a href="{{ route('mapel') }}" class="menu-card">
        <span>Mapel</span>
    </a>

    <a href="{{ route('jadwal') }}" class="menu-card">
        <span>Jadwal mengajar</span>
    </a>
</div>

@endsection()