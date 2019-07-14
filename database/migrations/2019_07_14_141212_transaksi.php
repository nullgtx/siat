<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Transaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->bigIncrements('idtransaksi');
            $table->string('kodetransaksi');
            $table->integer('id_cabang');
            $table->string('namakasir');
            $table->date('tanggal');
            $table->string('jenispasien');
            $table->string('namadokter');
            $table->string('kodebarang');
            $table->integer('jumlahbarang');
            $table->integer('totalbiaya');
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
