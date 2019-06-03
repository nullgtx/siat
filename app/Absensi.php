<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $table = 'absensis';
    protected $fillable = ['id','idkaryawan','tanggal','keterangan'];
    public function datapegawai(){
        return $this->hasOne('App\Pegawais','idkaryawan','idkaryawan');
    }
}
