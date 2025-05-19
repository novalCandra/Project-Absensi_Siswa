<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\User;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwal = Jadwal::get();
        return view('data.jadwal.tampil_jadwal', compact('jadwal'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function showCreateJadwal()
    {
        $guru = User::where('role','guru')->get();
        $mapel = Mapel::all();
        $kelas = Kelas::all();
        return view('data.jadwal.tambah_jadwal', compact('guru', 'mapel', 'kelas'));
    }
    public function create(Request $request)
    {
        $validate = $request->validate([
            'user_id' => 'required|exists:users,id',
            'mapel_id' => 'required|exists:mapels,id',
            'kelas_id' => 'required|exists:kelas,id',
            'tanggal' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required'
        ]);

        //simpan data
        Jadwal::create($validate);
        return redirect('jadwal');
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
    public function show(Jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jadwal $jadwal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jadwal = Jadwal::find($id);
        $jadwal->delete();

        return redirect('jadwal');
    }
}
