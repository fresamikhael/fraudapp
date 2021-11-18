<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReasonReject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reason_reject', function (Blueprint $table) {
           $table->String('no_kasus')->primary();
           $table->String('reason_keterangan_saksi');
           $table->String('reason_bukti_dokumen_surat');
           $table->String('reason_keterangan_pelaku');
            $table->String('reason_lain_lain');
            $table->String('reason_barang_bukti');
            $table->String('reason_kelengkapan_dokumen');
            $table->String('reason_kronologis_lengkap');
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
        Schema::dropIfExists('reason_reject');
    }
}
