<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('other', function (Blueprint $table) {
            $table->string('no_kasus')->primary();
            $table->dateTime('tanggal');
            $table->string('nama_pihak')->nullable();
            $table->string('unit')->nullable();
            $table->string('no_dokumen')->nullable();
            $table->integer('nilai_kerugian')->nullable();

            $table->text('kronologi')->nullable();
            $table->text('dokumen')->nullable();
            $table->text('bukti1')->nullable();
            $table->text('bukti2')->nullable();
            $table->text('bukti3')->nullable();
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
        Schema::dropIfExists('other');
    }
}
