<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->middleware('role:admin');
    // }

    public function showDashboard()
    {
        $totalJurusan = Jurusan::count();
        $totalGuru = User::where('role', 'guru')->count();
        $jumlahSiswa = Siswa::count();

        $data = Jurusan::withCount('kelas')->get();
        $labels = $data->pluck('nama_jurusan');
        $counts = $data->pluck('kelas_count');

        $user = Auth::user();
        return view('admin.dashboard_admin', [
            'user' => $user,
            'totalJurusan' => $totalJurusan,
            'totalGuru' => $totalGuru,
            'jumlahSiswa' => $jumlahSiswa,
            'labels' => $labels,
            'counts' => $counts
        ]);
    }

}
