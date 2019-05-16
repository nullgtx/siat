<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataobats extends Model
{
    protected $table = 'dataobat';
    protected $fillable = ['id','kodebarang','jenisbarang','keteranganbarang','satuanbarang','hargabarang','jumlahbarang','tanggalmasuk','tanggalexpired'];
    
}
