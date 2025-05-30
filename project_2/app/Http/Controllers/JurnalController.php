<?php

namespace App\Http\Controllers;

use App\Models\Jurnal;
use Illuminate\Http\Request;

class JurnalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id'=>'required|exists:users,id',
            'mapel_id'=>'required|exists:mapels,id',
            'kelas_id'=>'required|exists:kelas,id',
            'tanggal'=>'required|date',
            'waktu_mulai'=>'required',
            'waktu_selesai'=>'required',
            'catatan'=>'nullable|string',
        ]);

        Jurnal::create([
            'user_id' => auth()->id(), // atau dari inputan
            'mapel_id' => $request->mapel_id,
            'kelas_id' => $request->kelas_id,
            'tanggal' => $request->tanggal, // atau $request->tanggal
            'waktu_mulai' => $request->waktu_mulai,
            'waktu_selesai' => $request->waktu_selesai,
            'catatan' => $request->catatan,
        ]);

        return redirect()->back()->with('success','Jurnal berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jurnal $jurnal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jurnal $jurnal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jurnal $jurnal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jurnal $jurnal)
    {
        //
    }
}
