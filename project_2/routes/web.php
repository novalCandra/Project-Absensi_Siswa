<?php

use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\HalamanDataController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Proses login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Dashboard
Route::get('/dashboardadmin', [DashboardAdminController::class, 'showDashboard'])->name('dashboardadmin');
Route::get('/data', [HalamanDataController::class, 'showHalamanData'])->name('data');

// Jurusan
Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan');
Route::get('/jurusan/edit/{id}', [JurusanController::class, 'edit'])->name('jurusan.edit');
Route::post('/jurusan/update/{id}', [JurusanController::class, 'update'])->name('jurusan.update');
Route::get('/jurusan/delete/{id}', [JurusanController::class, 'delete'])->name('jurusan.delete');
Route::get('/jurusan/tambah', [JurusanController::class, 'showCreateJurusan'])->name('jurusan.tambah');
Route::post('/jurusan/post', [JurusanController::class, 'create'])->name('jurusan.post');

// Kelas
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas');
Route::get('/kelas/tambah', [KelasController::class, 'showCreateKelas'])->name('kelas.tambah');
Route::post('/kelas/post', [KelasController::class, 'create'])->name('kelas.post');
Route::get('/kelas/edit/{id}', [KelasController::class, 'edit'])->name('kelas.edit');
Route::post('/kelas/update/{id}', [KelasController::class, 'update'])->name('kelas.update');
Route::get('/kelas/delete/{id}', [KelasController::class, 'destroy'])->name('kelas.delete');

//siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');
Route::get('/siswa/tambah', [SiswaController::class, 'showCreateSiswa'])->name('siswa.tambah');
Route::post('/siswa/post', [SiswaController::class, 'create'])->name('siswa.post');
Route::get('/siswa/delete/{id}', [SiswaController::class, 'destroy'])->name('siswa.hapus');

//mapel
Route::get('/mapel', [MapelController::class, 'index'])->name('mapel');
Route::get('/mapel/tambah', [MapelController::class, 'showCreate'])->name('mapel.tambah');
Route::post('/mapel/post', [MapelController::class, 'create'])->name('mapel.post');
Route::get('/mapel/delete/{id}', [MapelController::class, 'destroy'])->name('mapel.hapus');

//jadwal
Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal');
Route::get('/jadwal/tambah', [JadwalController::class, 'showCreateJadwal'])->name('jadwal.tambah');
Route::post('/jadwal/post', [JadwalController::class, 'create'])->name('jadwal.post');
Route::get('/jadwal/delete/{id}', [JadwalController::class, 'destroy'])->name('jadwal.hapus');