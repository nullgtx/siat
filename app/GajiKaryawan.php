<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GajiKaryawan extends Model
{
    protected $table = 'gajikaryawan';
    protected $fillable = ['id','id_cabang','idkaryawan','tanggal','namakaryawan','jabatan','gajipokok','potongan','tunjangan','gajiakhir'];
    public function cabang(){
        return $this->hasOne('App\cabang','id_cabang','id_cabang');
    }
}
