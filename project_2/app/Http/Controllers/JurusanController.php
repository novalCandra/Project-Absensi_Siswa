<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $jurusan = Jurusan::get();
       return view('data.jurusan.tampil_jurusan', compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function showCreateJurusan() {
        return view('data.jurusan.tambah_jurusan');
    }

    public function create(Request $request)
    {
        $jurusan = new Jurusan();
        $jurusan->nama_jurusan = $request->nama_jurusan;
        $jurusan->save();

        return redirect('jurusan')->with('succes', 'Data berhasil ditambahkan');
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
    public function show(Jurusan $jurusan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jurusan = Jurusan::find($id);
        return view('data.jurusan.edit_jurusan', compact('jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_jurusan' => 'required|string|max:255'
        ]);

        $jurusan = Jurusan::findOrFail($id);
        $jurusan->update([
            'nama_jurusan' => $request->nama_jurusan
        ]);

        return redirect()->route('jurusan')->with('seucces', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $jurusan = Jurusan::find($id);
        $jurusan->delete();

        return redirect('jurusan');
    }
}
