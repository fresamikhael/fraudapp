<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NewFraudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_fraud', function (Blueprint $table) {
            $table->String('no_kasus')->primary();
            $table->dateTime('tanggal');
            $table->String('jenis_kasus');
            $table->String('faktor_penyebab');
            $table->String('pelaku')->nullable();
            $table->String('departemen')->nullable();
            $table->String('total_kerugian'); 
            $table->dateTime('tanggal_kejadian');
            $table->String('tempat_Kejadian');
            $table->String('kronologis_lengkap');
            $table->String('klasifikasi_kasus');
            $table->String('saksi_1');
            $table->String('departemen_saksi_1')->nullable();
            $table->String('saksi_2');
            $table->String('departemen_saksi_2')->nullable();
            $table->String('bukti_dokumen_surat');
            $table->String('keterangan_pelaku');
            $table->String('keterangan_saksi');
            $table->String('lain_lain');
            $table->String('dokumentasi_barang_bukti');
            $table->String('dokumentasi_investigasi');
            $table->String('bukti_lainya');

            $table->String('Sumber_Informasi');
            
         
            $table->String('User')->nullable();
          
          
            $table->String('Keterangan_Ahli')->nullable();
            $table->String('Surat')->nullable();
      
            $table->String('Barang_Bukti')->nullable();
            $table->String('Kelengkapan_Dokumen')->nullable();
     
            $table->String('Proses')->nullable()->nullable();
            $table->String('User_Proses')->nullable()->nullable();
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
        Schema::dropIfExists('new_fraud');
    }
}
