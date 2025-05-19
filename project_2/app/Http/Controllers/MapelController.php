<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mapel = Mapel::get();
        return view('data.mapel.tampil_mapel', compact('mapel'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function showCreate()
    {
        return view('data.mapel.tambah_mapel');
    }
    public function create(Request $request)
    {
        $validate = $request->validate([
            'nama_mapel' => 'required|string|max:255'
        ]);

        //simpan data
        Mapel::create($validate);

        return redirect()->route('mapel');
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
    public function show(Mapel $mapel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mapel $mapel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mapel $mapel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $mapel = Mapel::find($id);
        $mapel->delete();

        return redirect('mapel');
    }
}
