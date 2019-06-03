<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\cabang;
use App\Pegawais;
use App\Absensi;

class AbsensiController extends Controller
{
    public function index(){
        $cabang = cabang::all();
        //$cabangTerpilih = Input::get('cabangapotek');
        return view('absensikaryawan', compact('cabang'));
    }
}
