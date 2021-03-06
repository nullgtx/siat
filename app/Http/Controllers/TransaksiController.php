<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\cabang;
use Auth;
use Hash;
use DB;
use Carbon\Carbon;
use App\Transaksi;
use App\dataobats;
use App\BarangKeluar;
use PDF;

class TransaksiController extends Controller
{
    public function index() {
        $cabang = cabang::where('id_cabang', Auth::user()->id_cabang)->first();
        $dataobat = dataobats::where('id_cabang', $cabang->id_cabang)
                             ->where('jumlahbarang', '>', 0)->get();
        return view('dashboardkasir', ['cabang' => $cabang, 'dataobat' => $dataobat]);
    }
    public function indexHistoriTransaksi() {
        $cabang = cabang::where('id_cabang', Auth::user()->id_cabang)->first();
        $transaksi = Transaksi::where('id_cabang', $cabang->id_cabang)->get();
        return view('historitransaksi', ['cabang' => $cabang, 'transaksi' => $transaksi]);
    }
    public function indexPenjualanKepala() {
        $cabang = cabang::where('id_cabang', Auth::user()->id_cabang)->first();
        $transaksi = Transaksi::where('id_cabang', $cabang->id_cabang)->get();
        return view('PenjualanKepalaCabang', ['cabang' => $cabang, 'transaksi' => $transaksi]);
    }

    function tampilkasir($awal){
        $cabang = cabang::where('id_cabang', Auth::user()->id_cabang)->first();   
        $transaksi = Transaksi::where('id_cabang', $cabang->id_cabang)->where("tanggal" , $awal)->get();
            return view('historitransaksi', ['cabang' => $cabang, 'transaksi' => $transaksi,'awal'=> $awal]);
    }
    //public function indexPenjualanPemilik() {
    //    $cabang = cabang::where('id_cabang', Auth::user()->id_cabang)->first();
    //    $transaksi = Transaksi::where('id_cabang', $cabang->id_cabang)->get();
    //    return view('PenjualanPemilik', ['cabang' => $cabang, 'transaksi' => $transaksi]);
    //}
    public function save(Request $request){
        $waktu = Carbon::now();
        $cabang = $request->cabang;
        $kodetransaksi = Auth::user()->name . $cabang . $waktu->toDateTimeString();
        $hash = Hash::make($kodetransaksi);
        $kodetransaksi = $hash;
        $namakasir = $request->namakasir;
        $trans = $request->tabeltransaksi;
        $objectbarang = json_decode($trans);
        
        foreach($objectbarang as $key => $value) {
            $transaksi = new Transaksi;
            $transaksi->kodetransaksi = $hash;
            $transaksi->id_cabang = $request->id_cabang;
            $transaksi->namakasir = $namakasir;
            $transaksi->tanggal = $value->Tanggal;
            $transaksi->jenispasien = $value->JenisPasien;
            $transaksi->namadokter = $value->NamaDokter;
            $transaksi->kodebarang = $value->KodeBarang;
            $transaksi->jumlahbarang = $value->JumlahBarang;
            $transaksi->totalbiaya = $value->TotalBiaya;
            $transaksi->save();
            DB::table("dataobat")->where('kodebarang',$value->KodeBarang)
                      ->decrement("jumlahbarang",$value->JumlahBarang);

            // Variabel untuk mengisi tabel Barang Keluar (BK)

            $brg = dataobats::where('kodebarang', $value->KodeBarang)->first();

            $barangkeluar = new BarangKeluar;
            $barangkeluar->id_cabang = $request->id_cabang;
            $barangkeluar->kodebarang = $value->KodeBarang;
            $barangkeluar->jenisbarang = $brg->jenisbarang;
            $barangkeluar->keteranganbarang = $brg->keteranganbarang;
            $barangkeluar->satuanbarang = $brg->satuanbarang;
            $barangkeluar->hargabarang = $brg->hargabarang;
            $barangkeluar->jumlahbarang = $value->JumlahBarang;
            $barangkeluar->tanggalmasuk = $brg->tanggalmasuk;
            $barangkeluar->tanggalexpired = $brg->tanggalexpired;
            $barangkeluar->save();

            }
             return response()->json([
                      'status' => 'success',
                      'code' => 'storeTransaction'
          ]);
    }

    public function tampilpenjualancabang($id_cabang) {
        $cabang = DB::table('cabang')->where('id_cabang',$id_cabang)->first();
        $transaksi = Transaksi::where('id_cabang', $cabang->id_cabang)->get();
        return view('PenjualanPemilik', ['cabang' => $cabang, 'transaksi' => $transaksi]);
    }  

    function tampilkepala($awal,$akhir){
        $cabang = cabang::where('id_cabang', Auth::user()->id_cabang)->first();
        
        $transaksi = Transaksi::where('id_cabang', $cabang->id_cabang)->whereRaw("tanggal BETWEEN '" . $awal . "' and '" . $akhir . "'")->get();
            return view('penjualankepalacabang', ['cabang' => $cabang, 'transaksi' => $transaksi,'awal'=> $awal,'akhir'=>$akhir]);
    }
    public function exportPDFkepala($awal,$akhir, Request $request)
    {
        $awal = $request->awal;
        $akhir = $request->akhir;
        $cabang = cabang::where('id_cabang', Auth::user()->id_cabang)->first();
        $transaksi = Transaksi::where('id_cabang', $cabang->id_cabang)->whereRaw("tanggal BETWEEN '" . $awal . "' and '" . $akhir . "'")->get();
        $pdf = PDF::loadView('cetaklaporanpenjualan', ['cabang' => $cabang, 'transaksi' => $transaksi, 'awal' => $awal,'akhir' => $akhir]);
        return $pdf->download('Laporan-Barang-Masuk-Keluar'.date('Y-m-d_H-i-s').'.pdf');
    }

    function tampilpemilik($id_cabang,$awal,$akhir){
        $cabang = DB::table('cabang')->where('id_cabang',$id_cabang)->first();
        
        $transaksi = Transaksi::where('id_cabang', $cabang->id_cabang)->whereRaw("tanggal BETWEEN '" . $awal . "' and '" . $akhir . "'")->get();
            return view('penjualanpemilik', ['cabang' => $cabang, 'transaksi' => $transaksi,'awal'=> $awal,'akhir'=>$akhir]);
    }
    public function exportPDFpemilik($id_cabang,$awal,$akhir, Request $request)
    {
        $awal = $request->awal;
        $akhir = $request->akhir;
        $cabang = DB::table('cabang')->where('id_cabang',$id_cabang)->first();
        $transaksi = Transaksi::where('id_cabang', $cabang->id_cabang)->whereRaw("tanggal BETWEEN '" . $awal . "' and '" . $akhir . "'")->get();
        $pdf = PDF::loadView('cetaklaporanpenjualan', ['cabang' => $cabang, 'transaksi' => $transaksi, 'awal' => $awal,'akhir' => $akhir]);
        return $pdf->download('Laporan-Transaksi'.date('Y-m-d_H-i-s').'.pdf');
    }

   

}
