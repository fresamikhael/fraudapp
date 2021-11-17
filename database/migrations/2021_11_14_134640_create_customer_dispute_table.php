<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerDisputeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_dispute', function (Blueprint $table) {
            $table->String('no_kasus')->primary();
            $table->dateTime('Tanggal');
            $table->String('Faktor_Penyebab');
            $table->String('Total_Kerugian');
            $table->String('Sumber_Informasi')->nullable();
            $table->dateTime('Tanggal_Kejadian'); 
            $table->String('Tempat_Kejadian')->nullable();
            $table->String('User');
            $table->String('Jenis_Kiriman');
            $table->String('Asuransi');
            $table->String('Bentuk_Kiriman');
            $table->String('Keterangan_Saksi');
            $table->String('Dokumen_Surat');
            $table->String('Dokumen_Form_Klaim');
            $table->String('Jenis_Kasus');
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
        Schema::dropIfExists('customer_dispute');
    }
}
