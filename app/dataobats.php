<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataobats extends Model
{
    protected $table = 'dataobat';
    protected $fillable = ['id','id_cabang','kodebarang','jenisbarang','keteranganbarang','satuanbarang','hargabarang','jumlahbarang','tanggalmasuk','tanggalexpired'];
    public function cabang(){
        return $this->hasOne('App\cabang','id_cabang','id_cabang');
    }
    
}
