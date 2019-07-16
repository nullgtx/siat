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
use PDF;

class GajiKaryawanController extends Controller
{
    public function index() {
        $cabang = cabang::where('id_cabang', Auth::user()->id_cabang)->first();
        $datapegawai = Pegawais::where('id_cabang', $cabang->id_cabang)->get();
        return view('gajikaryawankepala', ['cabang' => $cabang, 'datapegawai' => $datapegawai]);
    }
    public function buatGaji($idkaryawan){
        $cabang = cabang::where('id_cabang', Auth::user()->id_cabang)->first();
        $datapegawai = Pegawais::where('id_cabang', $cabang->id_cabang)
                                ->where('idkaryawan', $idkaryawan)->first();
        $absensi = Absensi::where('id_cabang', $cabang->id_cabang)
                                ->where('idkaryawan', $idkaryawan)->first();
        $jumlahalfa = DB::table('absensis')
        ->where('keterangan','Alfa')
        ->where('idkaryawan', $idkaryawan)
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
    public function lihatGaji($idkaryawan)
    {
        $cabang = cabang::where('id_cabang', Auth::user()->id_cabang)->first();
       // $gajikaryawan = GajiKaryawan::where('id_cabang', $cabang->id_cabang)->get();
        $gajikaryawan = DB::table('gajikaryawan')->where('idkaryawan',$idkaryawan)->get();
        //return view('lihatgaji', ['gajikaryawan' => $gajikaryawan]);
        return view('lihatgaji', ['cabang' => $cabang,'gajikaryawan' => $gajikaryawan]);         
    }

        public function lihatGajipemilik($id_cabang,$idkaryawan)
    {
        $cabang = DB::table('cabang')->where('id_cabang',$id_cabang)->first();
        $gajikaryawan = DB::table('gajikaryawan')->where('idkaryawan',$idkaryawan)->get();
        return view('lihatgajipemilik', ['cabang' => $cabang,'gajikaryawan' => $gajikaryawan]);      
    }

    public function exportPDF($id)
    {
        $cabang = cabang::where('id_cabang', Auth::user()->id_cabang)->first();
        $gajikaryawan = DB::table('gajikaryawan')->where('id',$id)->get();
        $pdf = PDF::loadView('cetakgaji', ['cabang' => $cabang,'gajikaryawan' => $gajikaryawan]);
        return $pdf->download('slipgaji'.date('Y-m-d_H-i-s').'.pdf');
    }
    public function exportPDFpemilik($id_cabang,$id)
    {
        $cabang = DB::table('cabang')->where('id_cabang',$id_cabang)->first();
        $gajikaryawan = DB::table('gajikaryawan')->where('id',$id)->get();
        $pdf = PDF::loadView('cetakgaji', ['cabang' => $cabang,'gajikaryawan' => $gajikaryawan]);
        return $pdf->download('slipgaji'.date('Y-m-d_H-i-s').'.pdf');
    }
}
