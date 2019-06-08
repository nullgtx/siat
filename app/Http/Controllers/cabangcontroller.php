<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\cabang;
use Auth;

class cabangcontroller extends Controller
{
    public function indexKepala(){
        $cabang = cabang::where('id_cabang', Auth::user()->id_cabang)->first();
        return view('dashboardkepala', ['cabang' => $cabang]);
    }
}
