<?php

namespace App\Http\Controllers;

use App\Models\Jenjang;
use App\Models\Jurusan;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Livewire\Attributes\Validate;
use Symfony\Contracts\Service\Attribute\Required;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelas = Kelas::get();
        return view('data.kelas.tampil_kelas', compact(['kelas']));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function showCreateKelas() {
        $jurusan = Jurusan::all();
        $jenjang = Jenjang::all();
        return view('data.kelas.tambah_kelas', compact(['jurusan', 'jenjang']));
    }
    public function create(Request $request)
    {
        $kelas = new Kelas();
        $kelas->jurusan_id = $request->jurusan;
        $kelas->jenjang_id = $request->jenjang;
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->save();

        return redirect('kelas');
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
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kelas = Kelas::findOrFail($id);
        $jurusan = Jurusan::all();
        $jenjang = Jenjang::all();
        return view('data.kelas.edit_kelas', compact(['kelas', 'jurusan', 'jenjang']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'jurusan_id' => "required|exists:jurusans,id",
            'jenjang_id' => "required|exists:jenjangs,id",
            'nama_kelas' => "required|max:255"
        ]);

        $kelas = Kelas::findOrFail($id);
        $kelas->update($validate);

        return redirect('kelas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete();

        return redirect('kelas');
    }
}
