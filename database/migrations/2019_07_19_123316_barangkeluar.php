<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Barangkeluar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangkeluar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_cabang');
            $table->string('kodebarang');
            $table->string('jenisbarang');
            $table->string('keteranganbarang');
            $table->string('satuanbarang');
            $table->bigInteger('hargabarang');
            $table->integer('jumlahbarang');
            $table->date('tanggalmasuk');
            $table->date('tanggalexpired');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
