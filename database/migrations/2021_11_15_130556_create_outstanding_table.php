<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutstandingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outstanding', function (Blueprint $table) {
            $table->string('no_kasus')->primary();
            $table->dateTime('tanggal');
            $table->string('nama_perusahaan')->nullable();
            $table->string('unit')->nullable();
            $table->string('no_perjanjian')->nullable();
            $table->integer('total_outstanding')->nullable();
            $table->dateTime('dari_tanggal');
            $table->dateTime('sampai_tanggal');

            $table->text('kronologi')->nullable();
            $table->text('rekap_data')->nullable();
            $table->text('bukti_dokumen')->nullable();
            $table->text('perjanjian')->nullable();
            $table->text('bukti_penagihan')->nullable();
            $table->text('disposisi')->nullable();
            $table->text('dokumen_lainnya')->nullable();

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
        Schema::dropIfExists('outstanding');
    }
}
