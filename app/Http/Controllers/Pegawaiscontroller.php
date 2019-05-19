<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pegawais;
use Response;
class Pegawaiscontroller extends Controller
{
    public function index() {
        
        $datapegawai = DB::table('datapegawai')->get();
    
            return view('datakaryawankepala', ['datapegawai' => $datapegawai]);
        
        }
    
    //
    public function store(Request $request) {
        $pegawai = new Pegawais;
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
