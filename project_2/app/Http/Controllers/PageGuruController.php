<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Jenjang;
use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageGuruController extends Controller
{
    //
    public function home($id){
        
        $user = User::where('email', Auth::user()->email)->first();
        $id = $user->id;

        $userguru = User::find($id);
        $jadwalguru = Jadwal::with(['user','kelas','mapel'])->get();
        $kelas = Kelas::find($id);
        $mapel = Mapel::find($id);
        $jurusan = Jurusan::find($id);
        $jenjang = Jenjang::find($id);


        return view('pageguru.home',compact('jadwalguru','kelas','mapel','userguru','user','jurusan','jenjang'));
    }

    public function jadwal($id){
        $user = User::where('email', Auth::user()->email)->first();
        $id = $user->id;

        $userguru = User::find($id);
        $jadwalguru = Jadwal::with(['user','kelas','mapel'])->get();
        $kelas = Kelas::find($id);
        $mapel = Mapel::find($id);
        $jurusan = Jurusan::find($id);
        $jenjang = Jenjang::find($id);
        return view('pageguru.jadwal',compact('jadwalguru','kelas','mapel','userguru','user','jurusan','jenjang'));
    }

    public function presensi(){
        return view('pageguru.presensi');
    }

    public function profil(){
        $user = User::where('email', Auth::user()->email)->first();
        $id = $user->id;
        $userguru = User::find($id);

        return view('pageguru.profileGuru',compact('userguru','user'));
    }


}
