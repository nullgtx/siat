<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\dataobats;
use Response;

class obatcontroller extends Controller
{
    /*public function showInputObatView() {
        $cabang = Branch::where('nik', Auth::user()->nik)->first();
        $supplier = Supplier::where('branch_id', $cabang->id)->get();
        return view('input.obat', ['cabang' => $cabang, 'supplier' => $supplier]);
    }*/
   
    public function store(Request $request) {
        $obat = new dataobats;
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
}
