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
       //punyayanko $dataobat = dataobats::find($id);
        
       //punyayanko return view('editbarang', compact('dataobat','id'));
	$dataobat = DB::table('dataobat')->where('id',$id)->get();
	return view('editbarang',['dataobat' => $dataobat]);
    }
    public function updateBarang(Request $request){
      DB::table('dataobat')->where('id',$request->id)->update([
            'kodebarang' => $request->kodebarang,
            'jenisbarang' => $request->jenisbarang,
            'keteranganbarang' => $request->keteranganbarang,
            'satuanbarang' => $request->satuanbarang,
            'hargabarang' => $request->hargabarang,
            'jumlahbarang' => $request->jumlahbarang,
            'tanggalmasuk' => $request->tanggalmasuk,
            'tanggalexpired' => $request->tanggalexpired
        ]); 
   
        return redirect('/dashboard/kepala/stokbarang')
        ->with('success','Product updated successfully');
    }
    public function deleteBarang($id)
    {
        DB::table('dataobat')->where('id',$id)->delete();
        return redirect('/dashboard/kepala/stokbarang');
    }
}
