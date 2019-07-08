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
    public function search(Request $request)
    { 
        /*  
            Ditambahkan $cabang buat search nya cuman nampilin berdasarkan cabang
            
            Ditambahkan where id_cabang biar kalo di klik search tanpa isi nanti
            cuman muncul semua barang berdasarkan cabangnya aja
            
            Ditambah wherein id_cabang biar nampilin hasil searchnya berdasarkan cabangnya aja
        */

        $cabang = cabang::where('id_cabang', Auth::user()->id_cabang)->first();
        $cari = $request->search;
        $dataobat = DB::table('dataobat')
        ->where('id_cabang', $cabang->id_cabang)
        ->where('kodebarang','like',"%".$cari."%")
        ->orwhere('keteranganbarang','like',"%".$cari."%")
        ->wherein('id_cabang', [$cabang->id_cabang])
        ->paginate(10);
        if(count($dataobat)>0 && $cari !='')
            return view('stokbarangkepala',['dataobat'=>$dataobat]);
            else return view('stokbarangkepala',['dataobat'=>$dataobat])->with('errorMsg','Masukkan kata kunci atau barang tidak ditemukan');
    }
    public function searchkasir(Request $request)
    { 
        /*  
            Ditambahkan $cabang buat search nya cuman nampilin berdasarkan cabang
            
            Ditambahkan where id_cabang biar kalo di klik search tanpa isi nanti
            cuman muncul semua barang berdasarkan cabangnya aja
            
            Ditambah wherein id_cabang biar nampilin hasil searchnya berdasarkan cabangnya aja
        */

        $cabang = cabang::where('id_cabang', Auth::user()->id_cabang)->first();
        $cari = $request->search;
        $dataobat = DB::table('dataobat')
        ->where('id_cabang', $cabang->id_cabang)
        ->where('kodebarang','like',"%".$cari."%")
        ->orwhere('keteranganbarang','like',"%".$cari."%")
        ->wherein('id_cabang', [$cabang->id_cabang])
        ->paginate(10);
        if(count($dataobat)>0 && $cari !='')
            return view('stokbarangkasir',['dataobat'=>$dataobat]);
            else return view('stokbarangkasir',['dataobat'=>$dataobat])->with('errorMsg','Masukkan kata kunci atau barang tidak ditemukan');
    }

    public function searchobatpemilik(Request $request, $id_cabang)
    { 
        /*  
            Ditambahkan $cabang buat search nya cuman nampilin berdasarkan cabang
            
            Ditambahkan where id_cabang biar kalo di klik search tanpa isi nanti
            cuman muncul semua barang berdasarkan cabangnya aja
            
            Ditambah wherein id_cabang biar nampilin hasil searchnya berdasarkan cabangnya aja
        */
        $cabang = DB::table('cabang')->where('id_cabang',$id_cabang)->first();
        $cari = $request->search;
        $dataobat = DB::table('dataobat')
        ->where('kodebarang','like',"%".$cari."%")
        ->orwhere('keteranganbarang','like',"%".$cari."%")
        ->wherein('id_cabang', [$cabang->id_cabang])
        ->paginate(10);
        if(count($dataobat)>0 && $cari !='')
        return view('stokbarangpemilik', ['cabang' => $cabang, 'dataobat' => $dataobat]);
            else return view('stokbarangpemilik', ['cabang' => $cabang, 'dataobat' => $dataobat])->with('errorMsg','Masukkan kata kunci atau barang tidak ditemukan');
    }

}
