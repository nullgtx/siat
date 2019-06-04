<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\cabang;
use App\Pegawais;
use App\Absensi;
use Auth;
use Response;

class AbsensiController extends Controller
{
    public function index(){
        $cabang = cabang::where('id_cabang', Auth::user()->id_cabang)->first();
        $datapegawai = Pegawais::where('id_cabang', $cabang->id_cabang)->get();
        return view('absensikaryawan', ['cabang' => $cabang, 'datapegawai'=> $datapegawai]);
    }
    public function store(Request $request) {
        $absen = new Absensi;
        $absen->id_cabang = $request->id_cabang;
        $absen->idkaryawan = $request->idkaryawan;
        $absen->tanggal = $request->tanggal;
        $absen->keterangan = $request->keterangan;
        $absen->save();
        return Response::json([
            'action' => 'save_absensi'
                ], 201);
    }
}
