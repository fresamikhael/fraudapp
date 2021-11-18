<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableStatusApprovalFraud extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_approval_fraud', function (Blueprint $table) {
            $table->String('no_kasus')->primary();
            $table->String('tanggal')->default('ON PROCESS');
            $table->String('jenis_kasus')->default('ON PROCESS');
            $table->String('faktor_penyebab')->default('ON PROCESS');
            $table->String('pelaku')->nullable()->default('ON PROCESS');
            $table->String('departemen')->nullable()->default('ON PROCESS');
            $table->String('total_kerugian')->default('ON PROCESS'); 
            $table->String('tanggal_kejadian')->default('ON PROCESS');
            $table->String('tempat_Kejadian')->default('ON PROCESS');
            $table->String('kronologis_lengkap')->default('ON PROCESS');
            $table->String('klasifikasi_kasus')->default('ON PROCESS');
            $table->String('bukti_dokumen_surat')->default('ON PROCESS');
            $table->String('keterangan_pelaku')->default('ON PROCESS');
            $table->String('keterangan_saksi')->default('ON PROCESS');
            $table->String('lain_lain')->default('ON PROCESS');
            $table->String('dokumentasi_barang_bukti')->default('ON PROCESS');
            $table->String('dokumentasi_investigasi')->default('ON PROCESS');
            $table->String('bukti_lainya')->default('ON PROCESS');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status_approval_fraud');
    }
}
