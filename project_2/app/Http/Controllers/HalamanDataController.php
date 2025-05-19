<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanDataController extends Controller
{
    public function showHalamanData() {
        return view('admin.data');
    }
}
