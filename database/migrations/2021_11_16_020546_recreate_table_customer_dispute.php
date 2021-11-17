<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RecreateTableCustomerDispute extends Migration
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
            $table->dateTime('tanggal');
            $table->String('jenis_kasus');
            $table->String('faktor_penyebab');
            $table->String('faktor_penyebab_lain')->nullable();
            $table->String('total_kerugian');
            $table->String('perjanjian');
            $table->dateTime('tanggal_kejadian');
            $table->String('customer');
            $table->String('jenis_kiriman');
            $table->String('Asuransi');
            $table->text('kronologis_singkat');
            $table->String('bentuk_kiriman');
            $table->String('detail_kiriman')->nullable();
            $table->String('keterangan_saksi');
            $table->String('dokumen_surat');
            $table->String('dokumen_form_klaim');
            $table->String('lain_lain');
            $table->String('barang_bukti');
            $table->String('kelengkapan_dokumen');
            $table->String('bukti_lainya');
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
