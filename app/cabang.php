<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cabang extends Model
{
    protected $table = 'cabang';
    public function datapegawai(){
        return $this->hasMany('datapegawai');
    }
    public function dataobat(){
        return $this->hasMany('dataobat');
    }
}
