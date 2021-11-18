<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RecreateTableStatusApprovalFraud extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_approval_fraud', function (Blueprint $table) {
            $table->String('status_no_kasus')->primary();
            $table->String('status_tanggal')->default('ON PROCESS');
            $table->String('status_jenis_kasus')->default('ON PROCESS');
            $table->String('status_faktor_penyebab')->default('ON PROCESS');
            $table->String('status_pelaku')->nullable()->default('ON PROCESS');
            $table->String('status_departemen')->nullable()->default('ON PROCESS');
            $table->String('status_total_kerugian')->default('ON PROCESS'); 
            $table->String('status_tanggal_kejadian')->default('ON PROCESS');
            $table->String('status_tempat_Kejadian')->default('ON PROCESS');
            $table->String('status_kronologis_lengkap')->default('ON PROCESS');
            $table->String('status_klasifikasi_kasus')->default('ON PROCESS');
            $table->String('status_bukti_dokumen_surat')->default('ON PROCESS');
            $table->String('status_keterangan_pelaku')->default('ON PROCESS');
            $table->String('status_keterangan_saksi')->default('ON PROCESS');
            $table->String('status_lain_lain')->default('ON PROCESS');
            $table->String('status_dokumentasi_barang_bukti')->default('ON PROCESS');
            $table->String('status_dokumentasi_investigasi')->default('ON PROCESS');
            $table->String('status_bukti_lainya')->default('ON PROCESS');
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
