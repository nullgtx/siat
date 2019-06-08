<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\cabang;
use App\Pegawais;
use App\GajiKaryawan;
use App\Absensi;
use Auth;
use Response;

class GajiKaryawanController extends Controller
{
    public function index() {
        $cabang = cabang::where('id_cabang', Auth::user()->id_cabang)->first();
        $datapegawai = Pegawais::where('id_cabang', $cabang->id_cabang)->get();
        return view('gajikaryawankepala', ['cabang' => $cabang, 'datapegawai' => $datapegawai]);
    }
    public function buatGaji(){
        $cabang = cabang::where('id_cabang', Auth::user()->id_cabang)->first();
        $datapegawai = Pegawais::where('id_cabang', $cabang->id_cabang)->first();
        $absensi = Absensi::where('id_cabang', $cabang->id_cabang)->first();
        $jumlahalfa = DB::table('absensis')
        ->where('keterangan','Alfa')
        ->wherein('id_cabang', [$cabang->id_cabang])
        ->count();
        
        if($cabang->id_cabang == 1){
            $gajipokok = 3900000;
        }
        elseif($cabang->id_cabang == 4){
            $gajipokok = 1850000;
        }
        else{
            $gajipokok = 1750000;
        }

        $potongan = $jumlahalfa * 50000;
        if($datapegawai->role == "Kepala Cabang"){
            $tunjangan = $gajipokok * 100/100;
        }
        elseif($datapegawai->role == "Staff Keuangan"){
            $tunjangan = $gajipokok * 80/100;
        }
        elseif($datapegawai->role == 'Apoteker'){
            $tunjangan = $gajipokok * 80/100;
        }
        else{
            $tunjangan = $gajipokok * 60/100;
        }
        $gajiakhir = $gajipokok - $potongan + $tunjangan; 
        return view ('tambahgaji', ['cabang' => $cabang, 'datapegawai' => $datapegawai,
                    'absensi' => $absensi, 'jumlahalfa' => $jumlahalfa, 'gajipokok' => $gajipokok,
                    'potongan' => $potongan, 'tunjangan' => $tunjangan, 'gajiakhir' => $gajiakhir]);
    }
    public function store(Request $request){
        $gajikaryawan = DB::table('gajikaryawan')
                    ->whereDate('tanggal', $request->tanggal)
                    ->get();
        foreach($gajikaryawan as $gaj){
            if ($gaj->idkaryawan == $request->idkaryawan) {
                return Response::json([
                    'action' => "Gaji Karyawan Sudah Dibuat"
                    ], 409);
            }
        }
        
        $gaji = new GajiKaryawan;
        $gaji->id_cabang = $request->id_cabang;
        $gaji->idkaryawan = $request->idkaryawan;
        $gaji->tanggal = $request->tanggal;
        $gaji->namakaryawan = $request->namakaryawan;
        $gaji->jabatan = $request->jabatan;
        $gaji->gajipokok = $request->gajipokok;
        $gaji->potongan = $request->potongan;
        $gaji->tunjangan = $request->tunjangan;
        $gaji->gajiakhir = $request->gajiakhir;
        $gaji->save();
        return Response::json([
            'action' => 'save_gajikaryawan'
                ], 201);
    }
}
