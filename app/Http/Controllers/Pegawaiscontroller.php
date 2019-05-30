<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pegawais;
use Response;
use App\cabang;
use Auth;

class Pegawaiscontroller extends Controller
{
    public function index() {
        $cabang = cabang::where('id_cabang', Auth::user()->id_cabang)->first();
        $datapegawai = Pegawais::where('id_cabang', $cabang->id_cabang)->get();
        return view('datakaryawankepala', ['cabang' => $cabang, 'datapegawai' => $datapegawai]);
    }
    public function inputPegawai() {
        $cabang = cabang::where('id_cabang', Auth::user()->id_cabang)->first();
        return view('tambahkaryawan', ['cabang' => $cabang]);   
    }
    
    //
    public function store(Request $request) {
        $pegawai = new Pegawais;
        $pegawai->id_cabang = $request->id_cabang;
        $pegawai->idkaryawan = $request->idkaryawan;
        $pegawai->namakaryawan = $request->namakaryawan;
        $pegawai->jeniskelamin = $request->jeniskelamin;
        $pegawai->alamat = $request->alamat;
        $pegawai->tanggallahir = $request->tanggallahir;
        $pegawai->role = $request->role;
        $pegawai->save();
        return Response::json([
            'action' => 'save_datapegawai'
                ], 201); // Status code here
    }
    public function deleteKaryawan($id)
    {
        DB::table('datapegawai')->where('id',$id)->delete();
        return redirect('/dashboard/kepala/datakaryawankepala');
    }
}
