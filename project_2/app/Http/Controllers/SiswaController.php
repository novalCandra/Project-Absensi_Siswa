<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Siswa::get();
        return view('data.siswa.tampil_siswa', compact(['siswa']));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function showCreateSiswa()
    {
        $kelas = Kelas::all();
        return view('data.siswa.tambah_siswa', compact(['kelas']));
    }


    public function create(Request $request)
    {
        // Validasi data
        $validate = $request->validate([
            'kelas_id' => 'required|exists:kelas,id',
            'nama_siswa' => 'required|string|max:255'
        ]);

        // Simpan data
        Siswa::create($validate);

        return redirect()->route('siswa')->with('success', 'Siswa berhasil ditambahkan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();

        return redirect('siswa');
    }
}
