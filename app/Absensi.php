<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $table = 'absensis';
    protected $fillable = ['id','id_cabang','idkaryawan','tanggal','keterangan'];
    public function datapegawai(){
        return $this->hasOne('App\cabang','id_cabang','id_cabang');
    }
}
