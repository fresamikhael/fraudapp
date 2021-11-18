<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReasonRejectChangeNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reason_reject', function (Blueprint $table) {
            
           $table->String('reason_keterangan_saksi')->nullable()->change();
           $table->String('reason_bukti_dokumen_surat')->nullable()->change();
           $table->String('reason_keterangan_pelaku')->nullable()->change();
            $table->String('reason_lain_lain')->nullable()->change();
            $table->String('reason_barang_bukti')->nullable()->change();
            $table->String('reason_kelengkapan_dokumen')->nullable()->change();
            $table->String('reason_kronologis_lengkap')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reason_reject', function (Blueprint $table) {
            //
        });
    }
}
