<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawais extends Model
{
    protected $table = 'datapegawai';
    protected $fillable = ['id','idkaryawan','namakaryawan','jeniskelamin','alamat','tanggallahir','role'];
    //
}
