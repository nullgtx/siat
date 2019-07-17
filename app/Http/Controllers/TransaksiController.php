<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\cabang;
use Auth;
use App\dataobats;

class TransaksiController extends Controller
{
    public function index() {
        $cabang = cabang::where('id_cabang', Auth::user()->id_cabang)->first();
        $dataobat = dataobats::where('id_cabang', $cabang->id_cabang)
                             ->where('jumlahbarang', '>', 0)->get();
        return view('dashboardkasir', ['cabang' => $cabang, 'dataobat' => $dataobat]);
    }
}
