<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\dataobats;
use App\Pegawais;
use App\cabang;
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


}
