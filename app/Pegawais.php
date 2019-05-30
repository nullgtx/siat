<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawais extends Model
{
    protected $table = 'datapegawai';
    protected $fillable = ['id','id_cabang','idkaryawan','namakaryawan','jeniskelamin','alamat','tanggallahir','role'];
    public function cabang(){
        return $this->hasOne('App\cabang','id_cabang','id_cabang');
    }
}
