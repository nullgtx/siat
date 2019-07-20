<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\cabang;
use Auth;
use App\BarangMasuk;
use App\BarangKeluar;

class BarangMasukController extends Controller
{
    public function index() {
        $cabang = cabang::where('id_cabang', Auth::user()->id_cabang)->first();
        $barangmasuk = BarangMasuk::where('id_cabang', $cabang->id_cabang)->get();
        $barangkeluar = BarangKeluar::where('id_cabang', $cabang->id_cabang)->get();
        return view('kepalalaporanbarang', ['cabang' => $cabang, 'barangmasuk' => $barangmasuk, 'barangkeluar' => $barangkeluar]);   
    }

    //public function indexpemilik() {
    //    $cabang = cabang::where('id_cabang', Auth::user()->id_cabang)->first();
    //    $barangmasuk = BarangMasuk::where('id_cabang', $cabang->id_cabang)->get();
    //    $barangkeluar = BarangKeluar::where('id_cabang', $cabang->id_cabang)->get();
    //    return view('pemiliklaporanbarang', ['cabang' => $cabang, 'barangmasuk' => $barangmasuk, 'barangkeluar' => $barangkeluar]);   
    //}
}
