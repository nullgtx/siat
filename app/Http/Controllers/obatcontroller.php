<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\dataobats;
use Response;

class obatcontroller extends Controller
{
    public function index() {
        
    $dataobat = DB::table('dataobat')->get();

        return view('stokbarangkepala', ['dataobat' => $dataobat]);
    
    }
   
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

    public function editBarang($kodebarang)
    {
        $dataobat = DB::table('dataobat')->find('id');
        if(count('id')>0){
            return view('editbarang',['dataobat'=>$dataobat]);
        }
        else{
            return redirect('/dashboard/kepala/stokbarang');
        }
    }
}
