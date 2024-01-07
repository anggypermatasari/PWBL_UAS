<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_transaksi', function (Blueprint $table) {
                $table->increments('id_transaksi');
                $table->integer('id_siswa')->unsigned();
                $table->integer('id_bayar')->unsigned();
                $table->string('jumlah_pembayaran');
                $table->date('tanggal_pembayaran');
                $table->timestamps();
            });
            Schema::table('tb_transaksi', function (Blueprint $table) {
                $table->foreign('id_siswa')->references('siswa_id')->on('tb_siswa')->onDelete('cascade')->onUpdate('cascade');
                $table->foreign('id_bayar')->references('bayar_id')->on('tb_bayar')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_transaksi');
    }
};
