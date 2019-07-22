<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\cabang;
use Auth;
use App\BarangMasuk;
use App\BarangKeluar;
use PDF;
use DB;

class BarangMasukController extends Controller
{
    public function index() {
        $cabang = cabang::where('id_cabang', Auth::user()->id_cabang)->first();
        $barangmasuk = BarangMasuk::where('id_cabang', $cabang->id_cabang)->get();
        $barangkeluar = BarangKeluar::where('id_cabang', $cabang->id_cabang)->get();
        return view('kepalalaporanbarang', ['cabang' => $cabang, 'barangmasuk' => $barangmasuk, 'barangkeluar' => $barangkeluar]);   
    }
    function tampil($awal,$akhir){
        $cabang = cabang::where('id_cabang', Auth::user()->id_cabang)->first();
        
        $barangmasuk = BarangMasuk::where('id_cabang', $cabang->id_cabang)->whereRaw("tanggalmasuk BETWEEN '" . $awal . "' and '" . $akhir . "'")->get();
        $barangkeluar = BarangKeluar::where('id_cabang', $cabang->id_cabang)->whereRaw("tanggalmasuk BETWEEN '" . $awal . "' and '" . $akhir . "'")->get();
            return view('kepalalaporanbarang', ['cabang' => $cabang, 'barangmasuk' => $barangmasuk, 'barangkeluar' => $barangkeluar]);
    }
    public function exportPDF($awal,$akhir, Request $request)
    {
        $awal = $request->awal;
        $akhir = $request->akhir;
        $cabang = cabang::where('id_cabang', Auth::user()->id_cabang)->first();
        $barangmasuk = BarangMasuk::where('id_cabang', $cabang->id_cabang)->whereRaw("tanggalmasuk BETWEEN '" . $awal . "' and '" . $akhir . "'")->get();
        $barangkeluar = BarangKeluar::where('id_cabang', $cabang->id_cabang)->whereRaw("tanggalmasuk BETWEEN '" . $awal . "' and '" . $akhir . "'")->get();
       // $gajikaryawan = DB::table('gajikaryawan')->where('id',$id)->get();
        $pdf = PDF::loadView('cetaklaporanbr', ['cabang' => $cabang, 'barangmasuk' => $barangmasuk, 'barangkeluar' => $barangkeluar,'awal' => $awal,'akhir' => $akhir]);
        return $pdf->download('Laporan-Barang-Masuk-Keluar'.date('Y-m-d_H-i-s').'.pdf');
    }

    public function tampilbarangmasukkeluar($id_cabang) {
        $cabang = DB::table('cabang')->where('id_cabang',$id_cabang)->first();
        $barangmasuk = BarangMasuk::where('id_cabang', $cabang->id_cabang)->get();
        $barangkeluar = BarangKeluar::where('id_cabang', $cabang->id_cabang)->get();
        return view('pemiliklaporanbarang', ['cabang' => $cabang, 'barangmasuk' => $barangmasuk, 'barangkeluar' => $barangkeluar]);
    }
    
    function tampilpemilik($id_cabang,$awal,$akhir){
        $cabang = DB::table('cabang')->where('id_cabang',$id_cabang)->first();
        
        $barangmasuk = BarangMasuk::where('id_cabang', $cabang->id_cabang)->whereRaw("tanggalmasuk BETWEEN '" . $awal . "' and '" . $akhir . "'")->get();
        $barangkeluar = BarangKeluar::where('id_cabang', $cabang->id_cabang)->whereRaw("tanggalmasuk BETWEEN '" . $awal . "' and '" . $akhir . "'")->get();
            return view('kepalalaporanbarang', ['cabang' => $cabang, 'barangmasuk' => $barangmasuk, 'barangkeluar' => $barangkeluar]);
    }
    public function exportPDFpemilik($id_cabang,$awal,$akhir, Request $request)
    {
        $awal = $request->awal;
        $akhir = $request->akhir;
        $cabang = DB::table('cabang')->where('id_cabang',$id_cabang)->first();
        $barangmasuk = BarangMasuk::where('id_cabang', $cabang->id_cabang)->whereRaw("tanggalmasuk BETWEEN '" . $awal . "' and '" . $akhir . "'")->get();
        $barangkeluar = BarangKeluar::where('id_cabang', $cabang->id_cabang)->whereRaw("tanggalmasuk BETWEEN '" . $awal . "' and '" . $akhir . "'")->get();
        $pdf = PDF::loadView('cetaklaporanbr', ['cabang' => $cabang, 'barangmasuk' => $barangmasuk, 'barangkeluar' => $barangkeluar,'awal' => $awal,'akhir' => $akhir]);
        return $pdf->download('Laporan-Barang-Masuk-Keluar'.date('Y-m-d_H-i-s').'.pdf');
    }

}
