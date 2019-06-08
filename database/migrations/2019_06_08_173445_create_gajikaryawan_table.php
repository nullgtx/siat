<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGajikaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gajikaryawan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_cabang');
            $table->string('idkaryawan');
            $table->date('tanggal');
            $table->string('namakaryawan');
            $table->string('jabatan');
            $table->integer('gajipokok');
            $table->integer('potongan');
            $table->integer('tunjangan');
            $table->integer('gajiakhir');
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
        Schema::dropIfExists('gajikaryawan');
    }
}
