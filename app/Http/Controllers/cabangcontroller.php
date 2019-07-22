<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\dataobats;
use App\Pegawais;
use App\cabang;
use App\Transaksi;
use App\BarangMasuk;
use App\BarangKeluar;
use Auth;
use Response;

class cabangcontroller extends Controller
{
    public function indexKepala(){
        $cabang = cabang::where('id_cabang', Auth::user()->id_cabang)->first();
        return view('dashboardkepala', ['cabang' => $cabang]);
    }
    public function indexCabang(){
        $cabang =DB::table('cabang')->get();
        return view('pilihcabang',['cabang'=>$cabang]);
        return Response::json([
            'action' => 'pilih_cabang'
                ], 401); // Status code here
    }
    public function tampilisicabang($id_cabang){
        $cabang = DB::table('cabang')->where('id_cabang',$id_cabang)->first();
        $dataobat = dataobats::where('id_cabang', $cabang->id_cabang)->get();
        return view('stokbarangpemilik', ['cabang' => $cabang, 'dataobat' => $dataobat]);  

    }
    public function tampilkaryawancabang($id_cabang){
        $cabang = DB::table('cabang')->where('id_cabang',$id_cabang)->first();
        $datapegawai = Pegawais::where('id_cabang', $cabang->id_cabang)->get();
        return view('datakaryawanpemilik', ['cabang' => $cabang, 'datapegawai' => $datapegawai]);
    }

    public function tampilgajicabang($id_cabang) {
        $cabang = DB::table('cabang')->where('id_cabang',$id_cabang)->first();
        $datapegawai = Pegawais::where('id_cabang', $cabang->id_cabang)->get();
        return view('gajipemilik', ['cabang' => $cabang, 'datapegawai' => $datapegawai]);
    }
    public function tampilpenjualancabang($id_cabang) {
        $cabang = DB::table('cabang')->where('id_cabang',$id_cabang)->first();
        $transaksi = Transaksi::where('id_cabang', $cabang->id_cabang)->get();
        return view('penjualanpemilik', ['cabang' => $cabang, 'transaksi' => $transaksi]);
    }   
    
}
