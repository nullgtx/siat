<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    protected $table = 'barangkeluar';
    public function transaksi(){
        return $this->hasOne('App\Transaksi','kodebarang','kodebarang');
    }
    public function dataobat(){
        return $this->hasOne('App\dataobat','kodebarang','kodebarang');
    }
}
