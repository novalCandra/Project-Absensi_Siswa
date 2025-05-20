<?php

namespace App\Http\Controllers;

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


        return view('pageguru.home',compact('userguru','user'));
    }

    public function jadwal(){
        return view('pageguru.jadwal');
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
