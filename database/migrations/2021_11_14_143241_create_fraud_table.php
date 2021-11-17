<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFraudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fraud', function (Blueprint $table) {
            $table->String('no_kasus')->primary();
            $table->dateTime('Tanggal');
            $table->String('Jenis_Kasus');
            $table->String('Faktor_Penyebab');
            $table->String('Total_Kerugian');
            $table->String('Departemen')->nullable();
            $table->String('Pelaku')->nullable();

            $table->String('Sumber_Informasi');
            $table->dateTime('Tanggal_Kejadian');
            $table->String('Tempat_Kejadian');
            $table->String('User');
            $table->String('Klasifikasi_Kasus');
            $table->String('Keterangan_Saksi');
            $table->String('Keterangan_Ahli');
            $table->String('Surat');
            $table->String('Lain_Lain');
            $table->String('Barang_Bukti');
            $table->String('Kelengkapan_Dokumen');
            $table->String('Kronologis_Lengkap');
            $table->String('Proses')->nullable();
            $table->String('User_Proses')->nullable();
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
        Schema::dropIfExists('fraud');
    }
}
