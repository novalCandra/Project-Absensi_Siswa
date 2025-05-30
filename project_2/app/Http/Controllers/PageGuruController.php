<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Jenjang;
use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageGuruController extends Controller
{
    //
    public function home($id){
        
        $user = User::where('email', Auth::user()->email)->first();
        $id = $user->id;

        $findjadwal = Jadwal::where('user_id', $id)->with('mapel')->get(); // pastikan first(), bukan get()
        $jadwalid = $findjadwal->pluck('id')->toArray();
        $jadwalwaktu = Jadwal::find($jadwalid);


        $userguru = User::find($id);
        $jadwalguru = Jadwal::with(['user','kelas','mapel'])->get();
        $kelas = Kelas::find($id);

        $mapel = $findjadwal->pluck('mapel')->flatten();


        $jurusan = Jurusan::find($id);
        $jenjang = Jenjang::find($id);


        return view('pageguru.home',compact('jadwalguru','kelas','mapel','userguru','user','jurusan','jenjang','findjadwal','jadwalid','jadwalwaktu'));
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

    public function presensi($id, $jadwalid,$kelasid,$mapelid){
        $user = User::where('email', Auth::user()->email)->first();
        $id = $user->id;

        // Ambil satu data dari param
        $jadwal = Jadwal::with(['user','kelas','mapel'])->find($jadwalid);
        // Ambils semua data
        $jadwalguru = Jadwal::with(['user','kelas','mapel'])->get();
        // $jadwalwaktu = Jadwal::find($jadwalids);

        $userguru = User::find($id);

        $kelas = Kelas::find($id);
        

        $findkelas = Kelas::with(['jenjang','jurusan'])->find($kelasid);

        $mapel = Mapel::find($mapelid);
        
        $jurusan = Jurusan::find($id);
        $jenjang = Jenjang::find($id);
        $siswa = Siswa::with(['kelas'])->where('kelas_id',$kelasid)->get();
        return view('pageguru.presensi',compact('jadwalguru','kelas','mapel','userguru','user','jurusan','jenjang','siswa','jadwalid','jadwal'));
    }

    public function profil(){
        $user = User::where('email', Auth::user()->email)->first();
        $id = $user->id;
        $userguru = User::find($id);

        return view('pageguru.profileGuru',compact('userguru','user'));
    }

    public function jurnal($id,$jadwalid,$kelasid,$mapelid){
        $user = User::where('email', Auth::user()->email)->first();
        $id = $user->id;

        // Ambil satu data dari param
        $jadwal = Jadwal::with(['user','kelas','mapel'])->find($jadwalid);
        // Ambils semua data
        $jadwalguru = Jadwal::with(['user','kelas','mapel'])->get();
        // $jadwalwaktu = Jadwal::find($jadwalids);

        $userguru = User::find($id);

        $kelas = Kelas::find($id);
        

        $findkelas = Kelas::with(['jenjang','jurusan'])->find($kelasid);

        $mapel = Mapel::find($mapelid);
        
        $jurusan = Jurusan::find($id);
        $jenjang = Jenjang::find($id);
        $siswa = Siswa::with(['kelas'])->where('kelas_id',$kelasid)->get();

        return view('pageguru.jurnalmengajar',compact('jadwalguru','kelas','userguru','user','jurusan','jenjang','siswa','jadwalid','jadwal','mapel'));
    }


}
