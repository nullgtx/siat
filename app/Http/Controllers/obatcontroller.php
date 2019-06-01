<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\dataobats;
use App\cabang;
use Response;

class obatcontroller extends Controller
{
    public function index() {
        $cabang = cabang::where('id_cabang', Auth::user()->id_cabang)->first();
        $dataobat = dataobats::where('id_cabang', $cabang->id_cabang)->get();
        return view('stokbarangkepala', ['cabang' => $cabang, 'dataobat' => $dataobat]);   
    }

    public function tampilStokBarang_Kasir() {
        $cabang = cabang::where('id_cabang', Auth::user()->id_cabang)->first();
        $dataobat = dataobats::where('id_cabang', $cabang->id_cabang)->get();
        return view('stokbarangkasir', ['cabang' => $cabang, 'dataobat' => $dataobat]);   
    }

    public function inputBarang() {
        $cabang = cabang::where('id_cabang', Auth::user()->id_cabang)->first();
        return view('tambahbarang', ['cabang' => $cabang]);   
    }

    public function store(Request $request) {
        $obat = new dataobats;
        $obat->id_cabang = $request->id_cabang;
        $obat->kodebarang = $request->kodebarang;
        $obat->jenisbarang = $request->jenisbarang;
        $obat->keteranganbarang = $request->keteranganbarang;
        $obat->satuanbarang = $request->satuanbarang;
        $obat->hargabarang = $request->hargabarang;
        $obat->jumlahbarang = $request->jumlahbarang;
        $obat->tanggalmasuk = $request->tanggalmasuk;
        $obat->tanggalexpired = $request->tanggalexpired;
        $obat->save();
        return Response::json([
            'action' => 'save_dataobat'
                ], 201); // Status code here
    }
    public function editBarang($id)
    {
        $dataobat = dataobats::find($id);
        
        return view('editbarang', compact('dataobat','id'));
    }
    public function updateBarang(Request $req){
        $obat = dataobats::find($req->input('id')); 
        $obat->kodebarang = $req->input('kodebarang');
        $obat->jenisbarang = $req->input('jenisbarang');
        $obat->keteranganbarang = $req->input('keteranganbarang');
        $obat->satuanbarang = $req->input('satuanbarang');
        $obat->hargabarang = $req->input('hargabarang');
        $obat->jumlahbarang = $req->input('jumlahbarang');
        $obat->tanggalmasuk = $req->input('tanggalmasuk');
        $obat->tanggalexpired = $req->input('tanggalexpired');
        $obat->save();
    }
    public function deleteBarang($id)
    {
        DB::table('dataobat')->where('id',$id)->delete();
        return redirect('/dashboard/kepala/stokbarang');
    }
}
